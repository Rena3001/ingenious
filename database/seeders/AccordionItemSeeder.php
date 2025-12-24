<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AccordionItem;

class AccordionItemSeeder extends Seeder
{
    public function run(): void
    {
        $sectionId = 1;

        $items = [
            [
                'icon' => 'fa fa-plus',
                'sort_order' => 1,

                'title_en' => '100% Wire-Free - Free of power cords',
                'title_az' => '100% Simsiz – Elektrik kabelsiz',
                'title_ru' => '100% беспроводное использование',
                'title_de' => '100 % kabellos',
                'title_fr' => '100 % sans fil',
                'title_es' => '100 % inalámbrico',
                'title_zh' => '100% 无线',

                'content_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_az' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_ru' => '  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_de' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_zh' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
            ],
            [
                'icon' => 'fa fa-plus',
                'sort_order' => 2,

                'title_en' => 'HD Video - Enjoy sharp, detailed video',
                'title_az' => 'HD Video – Aydın və detallı görüntü',
                'title_ru' => 'HD Video - Оцените четкое, детализированное видео',
                'title_de' => 'HD Video - Genießen Sie scharfe, detaillierte Videos',
                'title_fr' => 'HD Video - Profitez de vidéos nettes et détaillées',
                'title_es' => 'Video HD - Disfruta de videos nítidos y detallados',
                'title_zh' => '高清视频 - 享受清晰、详细的视频',

                'content_en' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_az' =>
                'Yüksək keyfiyyətli və detallı görüntü təqdim edən HD video texnologiyası.',
                'content_ru' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_de' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_fr' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_es' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_zh' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
            ],
            [
                'icon' => 'fa fa-plus',
                'sort_order' => 3,

                'title_en' => 'Rechargeable - Long lasting batteries',
                'title_az' => 'Yenidən doldurulan – Uzunömürlü batareya',
                'title_ru' => 'Перезаряжаемые - Долговечные батареи',
                'title_de' => 'Wiederaufladbar - Langlebige Batterien',
                'title_fr' => 'Rechargeable - Batteries longue durée',
                'title_es' => 'Recargable - Baterías de larga duración',
                'title_zh' => '可充电 - 长效电池',

                'content_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_az' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_de' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_zh' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
            ],
            [
                'icon' => 'fa fa-plus',
                'sort_order' => 4,

                'title_en' => 'Charging - Get fast battery charging',
                'title_az' => 'Şarj – Sürətli enerji yığımı',
                'title_ru' => 'Зарядка - Быстрая зарядка батареи',
                'title_de' => 'Laden - Schnelles Aufladen der Batterie',
                'title_fr' => 'Chargement - Recharge rapide de la batterie',
                'title_es' => 'Carga: carga rápida de la batería',
                'title_zh' => '充电 - 快速电池充电',

                'content_en' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_az' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_ru' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_de' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_fr' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
                'content_zh' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer convallis accumsan mi nec elementum. Nulla ante metus.',
            ],
        ];

        foreach ($items as $item) {
            AccordionItem::create(array_merge($item, [
                'accordion_section_id' => $sectionId,
                'is_active' => true,
            ]));
        }
    }
}
