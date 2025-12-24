<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AccordionSection;

class AccordionSectionSeeder extends Seeder
{
    public function run(): void
    {
        AccordionSection::updateOrCreate(
            ['id' => 1],
            [
                'background_image' => '',

                'title_az' => 'Mobil Video Giriş',
                'title_en' => 'Mobile Video Access',
                'title_ru' => 'Мобильный доступ к видео',
                'title_de' => 'Mobiler Videozugriff',
                'title_fr' => 'Accès vidéo mobile',
                'title_es' => 'Acceso a video móvil',
                'title_zh' => '移动视频访问',

                'is_active' => true,
            ]
        );
    }
}
