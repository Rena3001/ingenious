<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductSupportSection;

class ProductSupportSectionSeeder extends Seeder
{
    public function run(): void
    {
        ProductSupportSection::create([
            'background_image' => 'backgrounds/22.jpg',
            'image' => 'products/camera-2.png',

            'title_en' => 'CAMERA SUPPORTS TWO-WAY AUDIO',
            'title_az' => 'KAMERA İKİTƏRƏFLİ AUDİONU DƏSTƏKLƏYİR',
            'title_ru' => 'КАМЕРА ПОДДЕРЖИВАЕТ ДВУСТОРОННЕ АУДИО',
            'title_de' => 'KAMERA UNTERSTÜTZT ZWEIWEITIGES AUDIO',
            'title_fr' => 'CAMÉRA SUPPORTANT L\'AUDIO À DEUX SENS',
            'title_es' => 'CÁMARA CON AUDIO BIDIRECCIONAL',
            'title_zh' => '摄像头支持双向音频',

            'description_en' => 'Aliquam elementum, nisi eu sodales pretium, ante leo consequat ipsum.',
            'description_az' => 'Kamera iki tərəfli səs ötürülməsini dəstəkləyir.',
            'description_ru' => 'Aliquam elementum, nisi eu sodales pretium, ante leo consequat ipsum.',
            'description_de' => 'Aliquam elementum, nisi eu sodales pretium, ante leo consequat ipsum.',
            'description_fr' => 'Aliquam elementum, nisi eu sodales pretium, ante leo consequat ipsum.',
            'description_es' => 'Aliquam elementum, nisi eu sodales pretium, ante leo consequat ipsum.',
            'description_zh' => 'Aliquam elementum, nisi eu sodales pretium, ante leo consequat ipsum.',

            'icon_1' => 'flaticon-speaker-2',
            'icon_1_url' => '#',
            'icon_2' => 'flaticon-old-radio-microphone',
            'icon_2_url' => '#',
            'icon_3' => 'flaticon-speaker',
            'icon_3_url' => '#',

            'button_url' => '/audio',
            'is_active' => true,
        ]);
    }
}
