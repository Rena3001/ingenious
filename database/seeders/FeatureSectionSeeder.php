<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSectionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('feature_sections')->insert([
            'background_image' => 'images/background/12.jpg',

            // Title
            'title_az' => 'SADƏ VƏ EFFEKTİV',
            'title_en' => 'SIMPLE AND EFFECTIVE',
            'title_ru' => 'ПРОСТО И ЭФФЕКТИВНО',
            'title_de' => 'EINFACH UND EFFEKTIV',
            'title_fr' => 'SIMPLE ET EFFICACE',
            'title_es' => 'SIMPLE Y EFECTIVO',
            'title_zh' => '简单高效',

            // Description
            'description_az' => 'Sadə interfeys və güclü funksionallıqla effektiv təhlükəsizlik həlləri təqdim edirik.',
            'description_en' => 'We deliver effective security solutions with a simple interface and powerful functionality.',
            'description_ru' => 'Мы предоставляем эффективные решения безопасности с простым интерфейсом.',
            'description_de' => 'Wir bieten effektive Sicherheitslösungen mit einer einfachen Benutzeroberfläche.',
            'description_fr' => 'Nous fournissons des solutions de sécurité efficaces avec une interface simple.',
            'description_es' => 'Ofrecemos soluciones de seguridad eficaces con una interfaz sencilla.',
            'description_zh' => '我们通过简单的界面和强大的功能提供高效的安全解决方案。',

            'button_link' => '',

            'is_active' => true,

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
