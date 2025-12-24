<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioSection;

class PortfolioSectionSeeder extends Seeder
{
    public function run(): void
    {
        PortfolioSection::updateOrCreate(
            ['id' => 1],
            [
                'title_az' => 'Ən Yaxşı Həlləri Təqdim Edirik',
                'title_en' => 'WE OFFER THE BEST',
                'title_ru' => 'МЫ ПРЕДЛАГАЕМ ЛУЧШЕЕ',
                'title_de' => 'WIR BIETEN DAS BESTE',
                'title_fr' => 'NOUS OFFRONS LE MEILLEUR',
                'title_es' => 'OFRECEMOS LO MEJOR',
                'title_zh' => '我们提供最好的解决方案',

                'description_az' =>
                    'Müasir CCTV və təhlükəsizlik həlləri ilə obyektlərinizi etibarlı şəkildə qoruyuruq.',
                'description_en' =>
                    'We provide reliable and modern CCTV solutions designed for maximum security.',
                'description_ru' =>
                    'Мы предлагаем современные и надежные решения видеонаблюдения.',
                'description_de' =>
                    'Wir bieten moderne und zuverlässige CCTV-Lösungen.',
                'description_fr' =>
                    'Nous proposons des solutions de vidéosurveillance modernes et fiables.',
                'description_es' =>
                    'Ofrecemos soluciones de CCTV modernas y confiables.',
                'description_zh' =>
                    '我们提供现代且可靠的监控解决方案。',

                'is_active' => true,
            ]
        );
    }
}
