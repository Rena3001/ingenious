<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WarrantyMainSlider;

class WarrantyMainSliderSeeder extends Seeder
{
    public function run(): void
    {
        WarrantyMainSlider::truncate();

        WarrantyMainSlider::create([
            'background_image' => 'warranty/sliders/slider-1.jpg',

            // TITLES
            'title_az' => 'Zəmanətli Təhlükəsizlik Həlləri',
            'title_en' => 'Guaranteed Security Solutions',
            'title_ru' => 'Гарантированные решения безопасности',
            'title_de' => 'Garantierte Sicherheitslösungen',
            'title_fr' => 'Solutions de sécurité garanties',
            'title_es' => 'Soluciones de seguridad garantizadas',
            'title_zh' => '有保障的安全解决方案',

            // SUBTITLES
            'subtitle_az' => 'Etibarlı qoruma və peşəkar nəzarət',
            'subtitle_en' => 'Reliable protection and professional monitoring',
            'subtitle_ru' => 'Надёжная защита и профессиональный контроль',
            'subtitle_de' => 'Zuverlässiger Schutz und professionelle Überwachung',
            'subtitle_fr' => 'Protection fiable et surveillance professionnelle',
            'subtitle_es' => 'Protección fiable y supervisión profesional',
            'subtitle_zh' => '可靠的保护与专业监控',

            'button_link' => '/products',

            'sort_order' => 1,
            'is_active'  => true,
        ]);

        WarrantyMainSlider::create([
            'background_image' => 'warranty/sliders/slider-2.jpg',

            // TITLES
            'title_az' => '24/7 Zəmanət və Texniki Dəstək',
            'title_en' => '24/7 Warranty & Technical Support',
            'title_ru' => 'Гарантия и техническая поддержка 24/7',
            'title_de' => '24/7 Garantie & Technischer Support',
            'title_fr' => 'Garantie et support technique 24/7',
            'title_es' => 'Garantía y soporte técnico 24/7',
            'title_zh' => '全天候保修与技术支持',

            // SUBTITLES
            'subtitle_az' => 'Hər zaman yanınızdayıq',
            'subtitle_en' => 'We are always by your side',
            'subtitle_ru' => 'Мы всегда рядом с вами',
            'subtitle_de' => 'Wir sind immer an Ihrer Seite',
            'subtitle_fr' => 'Nous sommes toujours à vos côtés',
            'subtitle_es' => 'Siempre estamos a tu lado',
            'subtitle_zh' => '我们始终与您同在',

            'button_link' => '/support',

            'sort_order' => 2,
            'is_active'  => true,
        ]);
    }
}
