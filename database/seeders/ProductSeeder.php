<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | EXISTING CATEGORY (Təhlükəsizlik Məhsulları)
        |--------------------------------------------------------------------------
        | Bu kateqoriya artıq bazada var və Filament select-də görünür
        */
        $securityCategory = Category::where('name_az', 'Təhlükəsizlik Məhsulları')->firstOrFail();

        /*
        |--------------------------------------------------------------------------
        | PRODUCT 1 — BO1-1-10MB
        |--------------------------------------------------------------------------
        */
        Product::create([
            'category_id' => $securityCategory->id,

            // IDENTIFICATION
            'model_code' => 'BO1-1-10MB',
            'slug' => Str::slug('BO1-1-10MB Passage Door Knob Lock'),

            // NAME (7 LANG)
            'name_az' => 'Keçid qapısı üçün kilidsiz qapı tutuqusu',
            'name_en' => 'Passage Door Knob Lock',
            'name_ru' => 'Дверная ручка без замка',
            'name_de' => 'Türknauf ohne Schloss',
            'name_es' => 'Perilla de puerta sin cerradura',
            'name_fr' => 'Poignée de porte sans serrure',
            'name_zh' => '无锁门把手',

            // DESCRIPTION (7 LANG)
            'description_az' =>
                'Mat qara rəngdə, kilidlənməyən qapı tutuqusu. Daxili otaqlar üçün ideal seçimdir.',
            'description_en' =>
                'Matte black, non-locking passage door knob ideal for interior rooms.',
            'description_ru' =>
                'Матовая черная дверная ручка без замка для внутренних помещений.',
            'description_de' =>
                'Mattschwarzer Türknauf ohne Schloss für Innenräume.',
            'description_es' =>
                'Perilla negra mate sin cerradura para interiores.',
            'description_fr' =>
                'Poignée noire mate sans serrure pour intérieur.',
            'description_zh' =>
                '哑光黑色无锁门把手，适用于室内。',

            // PRICE
            'price' => 49.99,
            'amazon_price' => 49.99,
            'currency' => 'USD',

            // FEATURES
            'features' => [
                'Finish: Matte Black',
                'Function: Interior / Passage',
                'Locking: Non-locking',
            ],

            // LINKS
            'amazon_link' => 'https://www.amazon.com/dp/BO1-1-10MB',
            'detail_page_url' => '/product/bo1-1-10mb',

            // BADGES
            'is_new' => true,
            'is_top_seller' => false,
            'is_active' => true,
        ]);

        /*
        |--------------------------------------------------------------------------
        | PRODUCT 2 — BO1-2-105-130MB
        |--------------------------------------------------------------------------
        */
        Product::create([
            'category_id' => $securityCategory->id,

            'model_code' => 'BO1-2-105-130MB',
            'slug' => Str::slug('BO1-2-105-130MB Entry Door Knob Lock'),

            'name_az' => 'Giriş qapısı üçün mexaniki kilid',
            'name_en' => 'Entry Door Knob Lock Set',
            'name_ru' => 'Механический дверной замок',
            'name_de' => 'Mechanisches Türschloss',
            'name_es' => 'Cerradura mecánica',
            'name_fr' => 'Serrure mécanique',
            'name_zh' => '机械门锁',

            'description_az' =>
                'Giriş qapıları üçün nəzərdə tutulmuş etibarlı mexaniki kilid.',
            'description_en' =>
                'Reliable mechanical entry door knob lock for exterior doors.',
            'description_ru' =>
                'Надежный механический замок для входных дверей.',
            'description_de' =>
                'Zuverlässiges mechanisches Schloss für Eingangstüren.',
            'description_es' =>
                'Cerradura mecánica confiable para puertas de entrada.',
            'description_fr' =>
                'Serrure mécanique fiable pour portes d’entrée.',
            'description_zh' =>
                '适用于入户门的可靠机械门锁。',

            'price' => 69.99,
            'amazon_price' => 69.99,
            'currency' => 'USD',

            'features' => [
                'Finish: Matte Black',
                'Function: Entry',
                'Security: Keyed Lock',
            ],

            'amazon_link' => 'https://www.amazon.com/dp/BO1-2-105-130MB',
            'detail_page_url' => '/product/bo1-2-105-130mb',

            'is_new' => false,
            'is_top_seller' => true,
            'is_active' => true,
        ]);
    }
}
