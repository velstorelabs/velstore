<?php

namespace App\Repositories\Admin\Product;

use App\Models\Product;
use App\Models\ProductTranslation;
use App\Services\Admin\ImageService;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use App\Models\StoreSetting;
use App\Models\Shop;
use App\Models\ProductVariant;

class ProductRepository implements ProductRepositoryInterface
{
    protected $imageService;

    // Inject ImageService into the repository constructor
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }
   
    public function all()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::findOrFail($id);
    }

    public function store(array $translations, array $data, array $variants = [])
    {
       /* $sku = $data['SKU'];
        $skuCounter = 1;
        
        while (Product::where('SKU', $sku)->exists()) {
            $sku = $data['SKU'] . '-' . $skuCounter;
            $skuCounter++;
        }

        $defaultCurrencyCode = getWebConfig('default_currency', 'USD');

        $shop = Shop::where('vendor_id', 1)->first();

        if (!$shop) {
            throw new Exception('No shop found for this vendor.');
        }

        $product = Product::create([
            'vendor_id' => 1,
            'shop_id' => $shop->id, 
            'category_id' => $data['category_id'],
            'price' => currency_to_usd($data['price'], $defaultCurrencyCode),
            'stock' => $data['stock'],
            'status' => $data['status'] ?? true,
            'slug' => $data['slug'],
            'currency' => $data['currency'],
            'SKU' => $sku,
            'weight' => $data['weight'],
            'dimensions' => $data['dimensions'],
            'product_type' => $data['product_type'],
        ]);

        if (isset($data['product_image_url']) && $data['product_image_url'] instanceof \Illuminate\Http\UploadedFile) {
            $imagePath = $this->imageService->uploadImage($data['product_image_url'], 'products'); 
            
            $productImage = new ProductImage([
                'name' => basename($imagePath), 
                'image_url' => $imagePath,                
                'product_id' => $product->id, 
                'type' => $data['image_type'] ?? 'thumb',
            ]);
            
            $productImage->save();
        }

        return $product; */

        $sku = $data['SKU'];
        $skuCounter = 1;
        
        while (Product::where('SKU', $sku)->exists()) {
            $sku = $data['SKU'] . '-' . $skuCounter;
            $skuCounter++;
        }
    
        $defaultCurrencyCode = getWebConfig('default_currency', 'USD');
    
        $shop = Shop::where('vendor_id', 1)->first();
    
        if (!$shop) {
            throw new Exception('No shop found for this vendor.');
        }
    
        $product = Product::create([
            'vendor_id' => 1,
            'shop_id' => $shop->id, 
            'category_id' => $data['category_id'],
            'price' => currency_to_usd($data['price'], $defaultCurrencyCode),
            'stock' => $data['stock'],
            'status' => $data['status'] ?? true,
            'slug' => $data['slug'],
            'currency' => $data['currency'],
            'SKU' => $sku,
            'weight' => $data['weight'],
            'dimensions' => $data['dimensions'],
            'product_type' => $data['product_type'],
        ]);
    
        // Upload Product Image
        if (isset($data['product_image_url']) && $data['product_image_url'] instanceof \Illuminate\Http\UploadedFile) {
            $imagePath = $this->imageService->uploadImage($data['product_image_url'], 'products'); 
            
            $productImage = new ProductImage([
                'name' => basename($imagePath), 
                'image_url' => $imagePath,                
                'product_id' => $product->id, 
                'type' => $data['image_type'] ?? 'thumb',
            ]);
            
            $productImage->save();
        }
    
        // Store Variants (if available)
        if (!empty($variants)) {
            foreach ($variants as $variant) {
                $variantSlug = strtolower(str_replace(' ', '-', $variant['name'] . '-' . $variant['value']));
    
                ProductVariant::create([
                    'product_id' => $product->id,
                    'variant_slug' => $variantSlug,
                    'name' => $variant['name'],
                    'value' => $variant['value'],
                    'price' => currency_to_usd($variant['price'], $defaultCurrencyCode),
                    'discount_price' => $variant['discount_price'] ?? null,
                    'stock' => $variant['stock'],
                    'SKU' => $variant['SKU'],
                    'weight' => $variant['weight'] ?? null,
                    'dimensions' => $variant['dimensions'] ?? null,
                ]);
            }
        }
    
        return $product; 


    }

    public function update($id, array $data)
    {       
        \Log::info('Attempting to update product with ID ' . $id, ['data' => $data]);

        $product = Product::findOrFail($id);
    
        if (isset($data['image_url']) && $data['image_url'] instanceof \Illuminate\Http\UploadedFile) {
            if ($product->images->isNotEmpty()) {
                $this->imageService->deleteImage($product->images->first()->image_url);
                $product->images->first()->delete();  
            }
    
            $imagePath = $this->imageService->uploadImage($data['image_url'], 'products');
    
            $productImage = new ProductImage([
                'name' => basename($imagePath), 
                'image_url' => $imagePath, 
                'product_id' => $product->id, 
                'type' => $data['image_type'] ?? 'thumb',
            ]);
    
            $productImage->save();
        } else {
            // If no new image is uploaded, update the image type of existing image
            if (isset($data['image_type']) && $product->images->isNotEmpty()) {
                $product->images->first()->update(['type' => $data['image_type']]);
            }
        }
    
        $slug = Str::slug($data['name'] ?? $product->name);
        $slugBase = $slug;
        $counter = 1;
        while (Product::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            $slug = $slugBase . '-' . $counter;
            $counter++;
        }
    
        $sku = $data['SKU'];
        $skuCounter = 1;
        while (Product::where('SKU', $sku)->where('id', '!=', $id)->exists()) {
            $sku = $data['SKU'] . '-' . $skuCounter;
            $skuCounter++;
        }
    
        $updated = $product->update([
            'category_id' => $data['category_id'],
            'price' => $data['price'],
            'stock' => $data['stock'],
            'status' => $data['status'] ?? true,
            'slug' => $slug,
            'currency' => $data['currency'],
            'SKU' => $sku,
            'weight' => $data['weight'],
            'dimensions' => $data['dimensions'],
            'product_type' => $data['product_type'],
        ]);
    
        if ($updated) {
            \Log::info('Product updated successfully with ID ' . $id);
        } else {
            \Log::error('Failed to update product with ID ' . $id);
        }
    
        return $product;  

    }

    public function destroy($id)
    {      
        $product = $this->find($id);

        $productImages = $product->images;

        foreach ($productImages as $productImage) {
            if ($productImage->image_url) {
                $this->imageService->deleteImage($productImage->image_url);
            }

            $productImage->delete();
        }

        return $product->delete();
    } 

}


