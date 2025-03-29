<?php

namespace App\Services\Vendor;

use App\Models\Product;
use App\Models\ProductTranslation;
use Yajra\DataTables\DataTables;
use App\Repositories\Vendor\Product\ProductRepository;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductsForDataTable($request)
    {
         $products = Product::with('translations')->get(); 

        return DataTables::of($products)
            ->addColumn('name', function ($product) {    
                $translation = $product->translations->firstWhere('language_code', 'en');
                return $translation ? $translation->name : 'No name available';
            })
            ->addColumn('description', function ($product) {
                $translation = $product->translations->firstWhere('language_code', 'en');
                return $translation ? $translation->description : 'No description available';
            })
            ->addColumn('price', function ($product) {
                return $product->price ? '$' . number_format($product->price, 2) : 'No price available';
            })
            ->addColumn('action', function ($product) {
            
                return '
                    <a href="' . route('admin.products.edit', $product->id) . '" class="btn btn-primary btn-sm">Edit</a>
                    <form action="' . route('admin.products.destroy', $product->id) . '" method="POST" class="d-inline" onsubmit="return confirm(\'Are you sure you want to delete this product?\');">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>';
            })
            ->rawColumns(['action']) 
            ->make(true);             
    }

    public function store(array $translations, array $data)
    {
    $data = Arr::add($data, 'slug', $this->createSlug($data['name']));  
    $product = $this->productRepository->store($data);

    foreach ($translations as $languageCode => $translation) {
        ProductTranslation::create([
            'product_id' => $product->id,
            'locale' => $languageCode,  
            'language_code' => $languageCode,  
            'name' => $translation['name'],
            'description' => $translation['description'] ?? null,
        ]);
    }

    return $product;
    
    }

    public function update($id, array $data, array $translations)
    { try {
        $updatedProduct = $this->productRepository->update($id, $data);

        foreach ($translations as $languageCode => $translation) {
            ProductTranslation::updateOrCreate(
                ['product_id' => $updatedProduct->id, 'language_code' => $languageCode],
                [
                    'name' => $translation['name'],
                    'description' => $translation['description'] ?? null,
                ]
            );
        }

        return $updatedProduct;  
    } catch (\Exception $e) {
        return ['error' => 'Error updating product: ' . $e->getMessage()];
    }
       
    }

    public function destroy($id)
    {
        try {
            return $this->productRepository->destroy($id);
        } catch (\Exception $e) {
            \Log::error("Error deleting product with ID {$id}: " . $e->getMessage());
            return false;  
        }

    } 

    private function createSlug($slug)
    {
        $slug = Str::slug($slug);
        $counter = 1;
        while (Product::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
