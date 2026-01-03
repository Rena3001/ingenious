<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVideoItems;
use App\Models\ProductVideoSections;

class ProductVideoItemsSeeder extends Seeder
{
    public function run(): void
    {
        $section = ProductVideoSections::first();

        if (!$section) {
            return;
        }

        ProductVideoItems::insert([
            [
                'product_video_section_id' => $section->id,
                'category' => 'security',
                'image' => 'products/video/security-1.jpg',

                'title_az' => 'Xarici CCTV Kamera',
                'title_en' => 'Outdoor CCTV Camera',
                'title_ru' => 'Наружная CCTV камера',
                'title_es' => 'Cámara CCTV exterior',
                'title_de' => 'Außen CCTV Kamera',
                'title_fr' => 'Caméra CCTV extérieure',
                'title_zh' => '室外监控摄像头',

                'description_az' => 'Ağıllı təhlükəsizlik kamerasının quraşdırma videosu.',
                'description_en' => 'Installation video for smart security camera.',
                'description_ru' => 'Видео установки камеры безопасности.',
                'description_es' => 'Video de instalación de la cámara.',
                'description_de' => 'Installationsvideo der Kamera.',
                'description_fr' => 'Vidéo d’installation de la caméra.',
                'description_zh' => '摄像头安装视频。',
            ],
            [
                'product_video_section_id' => $section->id,
                'category' => 'home_appliances',
                'image' => 'products/video/home-1.jpg',

                'title_az' => 'Ağıllı Qapı Kilidi',
                'title_en' => 'Smart Door Lock',
                'title_ru' => 'Умный дверной замок',
                'title_es' => 'Cerradura inteligente',
                'title_de' => 'Smartes Türschloss',
                'title_fr' => 'Serrure intelligente',
                'title_zh' => '智能门锁',

                'description_az' => 'Smart kilidin sürətli quraşdırılması.',
                'description_en' => 'Quick installation guide for smart lock.',
                'description_ru' => 'Быстрая установка умного замка.',
                'description_es' => 'Instalación rápida de cerradura.',
                'description_de' => 'Schnelle Installation des Schlosses.',
                'description_fr' => 'Installation rapide de la serrure.',
                'description_zh' => '智能门锁安装指南。',
            ],
            [
                'product_video_section_id' => $section->id,
                'category' => 'electrical_equipment',
                'image' => 'products/video/electrical-1.jpg',

                'title_az' => 'Enerji İdarəetmə Modulu',
                'title_en' => 'Energy Control Module',
                'title_ru' => 'Модуль управления энергией',
                'title_es' => 'Módulo de control de energía',
                'title_de' => 'Energiesteuermodul',
                'title_fr' => 'Module de gestion d’énergie',
                'title_zh' => '能源控制模块',

                'description_az' => 'Enerji modulunun video izahı.',
                'description_en' => 'Video explanation of energy module.',
                'description_ru' => 'Видеообзор модуля.',
                'description_es' => 'Explicación en video.',
                'description_de' => 'Videoerklärung.',
                'description_fr' => 'Explication vidéo.',
                'description_zh' => '能源模块视频说明。',
            ],
        ]);
    }
}
