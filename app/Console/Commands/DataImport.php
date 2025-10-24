<?php

namespace App\Console\Commands;

use App\Models\Shop;
use App\Models\StoreSetting;
use App\Models\Vendor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class DataImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting data import...');

        $this->info('Creating categories and products...');
        $this->createCategoriesAndProducts();
        $this->info('Categories and products created successfully.');

        $this->info('Running language seeder');
        $this->call('db:seed', ['--class' => 'LanguageSeeder']);

        $this->info('Running menu seeder');
        $this->call('db:seed', ['--class' => 'MenuSeeder']);

        $this->info('Running currency seeder');
        $this->call('db:seed', ['--class' => 'CurrencySeeder']);

        $this->info('Running brand seeder');
        $this->call('db:seed', ['--class' => 'BrandSeeder']);

        $this->info('Running category seeder');
        $this->call('db:seed', ['--class' => 'CategorySeeder']);

        $this->info('Running product seeder');
        $this->call('db:seed', ['--class' => 'ProductSeeder']);

        /* $this->info('Running attribute seeder');
         $this->call('db:seed', ['--class' => 'AttributeSeeder']);*/

        $this->info('Running banner seeder');
        $this->call('db:seed', ['--class' => 'BannerSeeder']);

        $this->info('Data import completed successfully!');
    }

    protected function createCategoriesAndProducts()
    {
        $seller = Vendor::firstOrCreate(
            ['email' => 'seller@example.com'],
            [
                'name' => 'Seller',
                'email' => 'seller@example.com',
                'password' => Hash::make('abc123'),
                'phone' => '+923001234567',
                'profile_image' => 'https://i.postimg.cc/FHxQs4Br/images-10.jpg',
            ]
        );

        $shop = Shop::firstOrCreate(
            ['name' => 'Soft Shoes'],
            [
                'vendor_id' => 1,
                'name' => 'Soft Shoes',
                'logo' => 'N/A',
                'description' => 'Luxurious comfort in every step. Crafted with premium materials for a soft, stylish, and effortless walking experience. ',
            ]
        );

        StoreSetting::insert([
            ['key' => 'default_currency', 'value' => 'USD'],
            ['key' => 'meta_title', 'value' => 'Welcome to Velstore - Your Laravel eCommerce Journey Begins!'],
            ['key' => 'meta_description', 'value' => 'Welcome to Velstore! You have successfully installed the ultimate Laravel eCommerce boilerplate. Set up your store, configure settings, and start selling with a powerful multi-vendor, multilingual platform.'],
            ['key' => 'phone_number', 'value' => '+1 234 567 890'],
        ]);
    }
}
