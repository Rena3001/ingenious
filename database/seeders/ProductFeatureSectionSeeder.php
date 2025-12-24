<?php

namespace Database\Seeders;

use App\Models\ProductFeatureSection;
use Illuminate\Database\Seeder;

class ProductFeatureSectionSeeder extends Seeder
{
    public function run(): void
    {
        ProductFeatureSection::create([
            'background_image' => 'product-features/bg.jpg',
            'image' => 'product-features/camera.png',

            'title_en' => 'Home Safety',
            'title_az' => 'Ev Təhlükəsizliyi',
            'title_ru' => 'Безопасность дома',
            'title_de' => 'Haussicherheit',
            'title_fr' => 'Sécurité à domicile',
            'title_es' => 'Seguridad en el hogar',
            'title_zh' => '家庭安全',

            'icon_1' => 'flaticon-alarm',
            'icon_1_title_en' => 'Motion Alarm',
            'icon_1_title_az' => 'Hərəkət Siqnalı',
            'icon_1_title_ru' => 'Датчик движения',
            'icon_1_title_de' => 'Bewegungsalarm',
            'icon_1_title_fr' => 'Alarme de mouvement',
            'icon_1_title_es' => 'Alarma de movimiento',
            'icon_1_title_zh' => '移动警报',

            'icon_1_desc_en' => 'Detects any movement instantly.',
            'icon_1_desc_az' => 'Hərəkəti dərhal aşkar edir.',
            'icon_1_desc_ru' => 'Мгновенно обнаруживает движение.',
            'icon_1_desc_de' => 'Erkennt Bewegung sofort.',
            'icon_1_desc_fr' => "Détecte immédiatement tout mouvement.",
            'icon_1_desc_es' => "Detecta cualquier movimiento instantáneamente.",
            'icon_1_desc_zh' => "即时检测任何移动。",

            'icon_2' => 'flaticon-eye',
            'icon_2_title_en' => 'Night Vision',
            'icon_2_title_az' => 'Gecə Görmə',
            'icon_2_title_ru' => 'Ночное видение',
            'icon_2_title_de' => 'Nachtsicht',
            'icon_2_title_fr' => 'Vision nocturne',
            'icon_2_title_es' => 'Visión nocturna',
            'icon_2_title_zh' => '夜视',
            'icon_2_desc_en' => 'Clear view in darkness.',
            'icon_2_desc_az' => 'Qaranlıqda aydın görüntü.',
            'icon_2_desc_ru' => 'Четкое изображение в темноте.',
            'icon_2_desc_de' => 'Klarer Blick in der Dunkelheit.',
            'icon_2_desc_fr' => 'Vue claire dans l\'obscurité.',
            'icon_2_desc_es' => 'Vista clara en la oscuridad.',
            'icon_2_desc_zh' => '黑暗中的清晰视野。',

            'icon_3' => 'flaticon-speaker',
            'icon_3_title_en' => 'Two Way Audio',
            'icon_3_title_az' => 'İki Tərəfli Audio',
            'icon_3_title_ru' => 'Двусторонний звук',
            'icon_3_title_de' => 'Zwei-Wege-Audio',
            'icon_3_title_fr' => 'Audio bidirectionnel',
            'icon_3_title_es' => 'Audio bidireccional',
            'icon_3_title_zh' => '双向音频',
            'icon_3_desc_en' => 'Communicate remotely.',
            'icon_3_desc_az' => 'Uzaqdan ünsiyyət.',
            'icon_3_desc_ru' => 'Удаленное общение.',
            'icon_3_desc_de' => 'Fernkommunikation.',
            'icon_3_desc_fr' => 'Communiquer à distance.',
            'icon_3_desc_es' => 'Comunicar de forma remota.',
            'icon_3_desc_zh' => '远程交流。',

            'is_active' => true,
        ]);
    }
}
