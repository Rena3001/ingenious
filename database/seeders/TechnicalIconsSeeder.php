<?php

namespace Database\Seeders;

use App\Models\TechnicalIcons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicalIconsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       TechnicalIcons::create([
            // ⚠️ HAMISI eyni icon family-dən
            'icon_1' => 'flaticon-video-camera',
            'icon_2' => 'flaticon-book',
            'icon_3' => 'flaticon-question',
            'icon_4' => 'flaticon-shield-2',

            'icon_1_az' => 'Video Təlimlər',
            'icon_1_en' => 'Video Tutorials',
            'icon_1_ru' => ' Видео уроки',
            'icon_1_de' => 'Video-Tutorials',
            'icon_1_es' => 'Tutoriales en video',
            'icon_1_fr' => 'Tutoriels vidéo',
            'icon_1_zh' => '视频教程',


            'icon_2_az' => 'Təlimat Kitabçaları',
            'icon_2_en' => 'Instruction Manuals',
            'icon_2_ru' => 'Инструкции',
            'icon_2_de' => 'Bedienungsanleitungen',
            'icon_2_es' => 'Manuales de instrucciones',
            'icon_2_fr' => 'Manuels d\'instruction',
            'icon_2_zh' => '使用手册',

            'icon_3_az' => 'Tez-tez Verilən Suallar',
            'icon_3_en' => 'Frequently Asked Questions',
            'icon_3_ru' => 'Часто задаваемые вопросы',
            'icon_3_de' => 'Häufig gestellte Fragen',
            'icon_3_es' => 'Preguntas frecuentes',
            'icon_3_fr' => 'Questions fréquemment posées',
            'icon_3_zh' => '常见问题',

            'icon_4_az' => 'Zəmanət və Servis',
            'icon_4_en' => 'Warranty & Service',
            'icon_4_ru' => 'Гарантия и сервис',
            'icon_4_de' => 'Garantie & Service',
            'icon_4_es' => 'Garantía y servicio',
            'icon_4_fr' => 'Garantie et service',
            'icon_4_zh' => '保修与服务',

            'is_active' => true,
        ]);
    }
}
