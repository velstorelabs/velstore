<?php

namespace Database\Seeders;

use App\Models\Language;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = Language::where('active', 1)->get();

        if ($languages->isEmpty()) {
            $this->command->warn('⚠️ No active languages found. Skipping menu item translations.');

            return;
        }

        $menuId = DB::table('menus')->insertGetId([
            'title' => 'Main Menu',
            'status' => true,
            'date' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $menuItems = [
            ['slug' => 'home', 'order_number' => 1, 'parent_id' => null],
            ['slug' => 'about', 'order_number' => 2, 'parent_id' => null],
            ['slug' => 'services', 'order_number' => 3, 'parent_id' => null],
            ['slug' => 'blog', 'order_number' => 4, 'parent_id' => null],
            ['slug' => 'contact', 'order_number' => 5, 'parent_id' => null],
        ];

        foreach ($menuItems as &$item) {
            $item['menu_id'] = $menuId;
            $item['created_at'] = Carbon::now();
            $item['updated_at'] = Carbon::now();
        }

        DB::table('menu_items')->insert($menuItems);

        $insertedMenuItems = DB::table('menu_items')->where('menu_id', $menuId)->get();

        $defaultTitles = ['Home', 'About Us', 'Our Services', 'Blog', 'Contact Us'];

        $localizedSamples = [
            'fr' => ['Accueil', 'À propos', 'Nos services', 'Blog', 'Contact'],
            'es' => ['Inicio', 'Sobre nosotros', 'Nuestros servicios', 'Blog', 'Contacto'],
        ];

        $translations = [];

        foreach ($insertedMenuItems as $index => $menuItem) {
            foreach ($languages as $lang) {
                $code = $lang->code;

                $title = $localizedSamples[$code][$index]
                    ?? $defaultTitles[$index]
                    ?? ucfirst($menuItem->slug);

                $translations[] = [
                    'menu_item_id' => $menuItem->id,
                    'language_code' => $code,
                    'title' => $title,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('menu_item_translations')->insert($translations);

    }
}
