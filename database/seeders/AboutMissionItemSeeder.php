<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutMissionItem;

class AboutMissionItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                
                'icon' => 'flaticon-eye',
                'title_az' => 'Vizyonumuz',
                'title_en' => 'Our Vision',
                'title_ru' => 'Наша миссия (Видение)',   // istəsən "Наше видение" edək
                'title_de' => 'Unsere Vision',
                'title_es' => 'Nuestra Visión',
                'title_fr' => 'Notre Vision',
                'title_zh' => '我们的愿景',
            ],
            [
                
                'icon' => 'flaticon-diamond',
                'title_az' => 'Dəyərlərimiz',
                'title_en' => 'Our Values',
                'title_ru' => 'Наши ценности',
                'title_de' => 'Unsere Werte',
                'title_es' => 'Nuestros Valores',
                'title_fr' => 'Nos Valeurs',
                'title_zh' => '我们的价值观',
            ],
            [
                
                'icon' => 'flaticon-target',
                'title_az' => 'Missiyamız',
                'title_en' => 'Our Mission',
                'title_ru' => 'Наша миссия',
                'title_de' => 'Unsere Mission',
                'title_es' => 'Nuestra Misión',
                'title_fr' => 'Notre Mission',
                'title_zh' => '我们的使命',
            ],
        ];

        foreach ($items as $data) {
            // Əgər səndə about_section_id sütunu yoxdursa, bu sətri aç:
            // unset($data['about_section_id']);

            AboutMissionItem::updateOrCreate(
                [
                    'icon' => $data['icon'],
                    'title_az' => $data['title_az'],
                ],
                $data
            );
        }
    }
}
