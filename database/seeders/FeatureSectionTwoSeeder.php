<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FeatureSectionTwo;

class FeatureSectionTwoSeeder extends Seeder
{
    public function run(): void
    {
        FeatureSectionTwo::updateOrCreate(
            ['id' => 1],
            [
                // Background
                'background_image' => 'assets/images/background/14.jpg',

                // ===== TITLES =====
                'title_en' => 'Monitoring Technology',
                'title_az' => 'Monitorinq Texnologiyası',
                'title_ru' => 'Технологии мониторинга',
                'title_de' => 'Überwachungstechnologie',
                'title_fr' => 'Technologie de surveillance',
                'title_es' => 'Tecnología de monitoreo',
                'title_zh' => '监控技术',

                // ===== DESCRIPTIONS =====
                'description_en' =>
                    'Advanced monitoring solutions designed for reliable performance, flexibility, and ease of use.',
                'description_az' =>
                    'Etibarlı performans, çevik idarəetmə və rahat istifadə üçün hazırlanmış müasir monitorinq həlləri.',
                'description_ru' =>
                    'Современные решения мониторинга для надежной работы и удобного управления.',
                'description_de' =>
                    'Moderne Überwachungslösungen für zuverlässige Leistung und einfache Bedienung.',
                'description_fr' =>
                    'Solutions de surveillance modernes pour des performances fiables et une utilisation simple.',
                'description_es' =>
                    'Soluciones de monitoreo modernas diseñadas para un rendimiento confiable.',
                'description_zh' =>
                    '为可靠性能和便捷使用而设计的先进监控解决方案。',

                // ===== ICON 1 =====
                'icon_1' => 'flaticon-laptop-2',
                'icon_1_title_en' => 'Easily Mount',
                'icon_1_title_az' => 'Asan Quraşdırma',
                'icon_1_title_ru' => 'Легкий монтаж',
                'icon_1_title_de' => 'Einfache Montage',
                'icon_1_title_fr' => 'Installation facile',
                'icon_1_title_es' => 'Montaje sencillo',
                'icon_1_title_zh' => '轻松安装',

                // ===== ICON 2 =====
                'icon_2' => 'flaticon-big-trophy',
                'icon_2_title_en' => 'Simple Magnetic',
                'icon_2_title_az' => 'Sadə Maqnit',
                'icon_2_title_ru' => 'Простая магнитная система',
                'icon_2_title_de' => 'Einfach magnetisch',
                'icon_2_title_fr' => 'Système magnétique simple',
                'icon_2_title_es' => 'Sistema magnético simple',
                'icon_2_title_zh' => '简易磁吸设计',

                // ===== ICON 3 =====
                'icon_3' => 'flaticon-fast-forward-square',
                'icon_3_title_en' => 'Camera On A Table',
                'icon_3_title_az' => 'Masanın Üzərində Kamera',
                'icon_3_title_ru' => 'Камера на столе',
                'icon_3_title_de' => 'Kamera auf dem Tisch',
                'icon_3_title_fr' => 'Caméra sur une table',
                'icon_3_title_es' => 'Cámara sobre la mesa',
                'icon_3_title_zh' => '桌面放置摄像头',
            ]
        );
    }
}
