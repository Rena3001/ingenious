<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QualityConsumerEquipmentSection;

class QualityConsumerEquipmentSectionSeeder extends Seeder
{
    public function run(): void
    {
        QualityConsumerEquipmentSection::updateOrCreate(
            ['id' => 1], // single section logic
            [
                // AZ
                'title_az' => 'Wi-Fi Pan/Tilt Təhlükəsizlik Sistemi',
                'description_az' => 'Yüksək keyfiyyətli Wi-Fi pan/tilt texnologiyası ilə təchiz olunmuş təhlükəsizlik avadanlıqları maksimum nəzarət və etibarlılıq təmin edir.',

                // EN
                'title_en' => 'Wi-Fi Pan/Tilt Security',
                'description_en' => 'High-quality Wi-Fi pan/tilt security equipment designed for maximum control, clarity, and reliability.',

                // RU
                'title_ru' => 'Wi-Fi Pan/Tilt Безопасность',
                'description_ru' => 'Современное оборудование Wi-Fi pan/tilt обеспечивает надежную защиту и полный контроль.',

                // DE
                'title_de' => 'Wi-Fi Pan/Tilt Sicherheit',
                'description_de' => 'Hochwertige Wi-Fi Pan/Tilt Sicherheitsausrüstung für maximale Kontrolle und Zuverlässigkeit.', 

                // FR
                'title_fr' => 'Sécurité Wi-Fi Pan/Tilt',
                'description_fr' => "Équipement de sécurité Wi-Fi pan/tilt de haute qualité conçu pour un contrôle, une clarté et une fiabilité maximales.",

                // ES
                'title_es' => 'Seguridad Wi-Fi Pan/Tilt',
                'description_es' => 'Equipo de seguridad Wi-Fi pan/tilt de alta calidad diseñado para un control, claridad y fiabilidad máximos.',

                // ZH
                'title_zh' => 'Wi-Fi 全景/倾斜 安全设备',
                'description_zh' => '高品质的 Wi-Fi 全景/倾斜 安全设备，旨在提供最大控制力、清晰度和可靠性。',

                // Image (manual upload olacaq)
                'image' => null,

                'is_active' => true,
            ]
        );
    }
}
