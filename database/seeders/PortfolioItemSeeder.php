<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioItem;

class PortfolioItemSeeder extends Seeder
{
    public function run(): void
    {
        $sectionId = 1;

        $items = [
            [
                'sort_order' => 1,
                'image' => 'assets/images/gallery/1-1.jpg',
                'product_url' => '#',

                'title_az' => 'Açıq Məkan CCTV',
                'title_en' => 'Outdoor CCTV',
                'title_ru' => 'Уличное видеонаблюдение',
                'title_de' => 'Outdoor-CCTV',
                'title_fr' => 'CCTV extérieur',
                'title_es' => 'CCTV para exteriores',
                'title_zh' => '室外监控',

                'description_az' =>
                    'Hər cür hava şəraitinə davamlı açıq məkan müşahidə kameraları.',
                'description_en' =>
                    'Weather-resistant outdoor cameras designed for reliable surveillance.',
                'description_ru' =>
                    'Уличные камеры, устойчивые к любым погодным условиям.',
                'description_de' =>
                    'Wetterfeste Kamerasysteme für den Außeneinsatz.',
                'description_fr' =>
                    'Caméras extérieures résistantes aux conditions climatiques.',
                'description_es' =>
                    'Cámaras exteriores resistentes a cualquier clima.',
                'description_zh' =>
                    '适用于各种天气条件的室外监控摄像头。',

                'is_active' => true,
            ],
            [
                'sort_order' => 2,
                'image' => 'assets/images/gallery/1-2.jpg',
                'product_url' => '#',

                'title_az' => 'Daxili Təhlükəsizlik',
                'title_en' => 'Indoor Security',
                'title_ru' => 'Внутренняя безопасность',
                'title_de' => 'Innensicherheit',
                'title_fr' => 'Sécurité intérieure',
                'title_es' => 'Seguridad interior',
                'title_zh' => '室内安全',

                'description_az' =>
                    'Ofislər və yaşayış sahələri üçün ideal daxili təhlükəsizlik sistemləri.',
                'description_en' =>
                    'Indoor security systems ideal for offices and living spaces.',
                'description_ru' =>
                    'Системы безопасности для офисов и жилых помещений.',
                'description_de' =>
                    'Sicherheitssysteme für Büros und Wohnräume.',
                'description_fr' =>
                    'Systèmes de sécurité pour bureaux et habitations.',
                'description_es' =>
                    'Sistemas de seguridad para oficinas y hogares.',
                'description_zh' =>
                    '适用于办公室和家庭的室内安全系统。',

                'is_active' => true,
            ],
            [
                'sort_order' => 3,
                'image' => 'assets/images/gallery/1-3.jpg',
                'product_url' => '#',

                'title_az' => 'Ağıllı Monitorinq',
                'title_en' => 'Smart Monitoring',
                'title_ru' => 'Умный мониторинг',
                'title_de' => 'Intelligente Überwachung',
                'title_fr' => 'Surveillance intelligente',
                'title_es' => 'Monitoreo inteligente',
                'title_zh' => '智能监控',

                'description_az' =>
                    'Ağıllı analiz və uzaqdan idarəetmə imkanları.',
                'description_en' =>
                    'Smart analytics and remote monitoring capabilities.',
                'description_ru' =>
                    'Умная аналитика и удаленный контроль.',
                'description_de' =>
                    'Intelligente Analyse und Fernüberwachung.',
                'description_fr' =>
                    'Analyse intelligente et surveillance à distance.',
                'description_es' =>
                    'Análisis inteligente y monitoreo remoto.',
                'description_zh' =>
                    '智能分析与远程监控功能。',

                'is_active' => true,
            ],
        ];

        foreach ($items as $item) {
            PortfolioItem::updateOrCreate(
                [
                    'portfolio_section_id' => $sectionId,
                    'sort_order' => $item['sort_order'],
                ],
                array_merge($item, [
                    'portfolio_section_id' => $sectionId,
                ])
            );
        }
    }
}
