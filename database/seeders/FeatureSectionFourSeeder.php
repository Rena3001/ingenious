<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FeatureSectionFour;

class FeatureSectionFourSeeder extends Seeder
{
    public function run(): void
    {
        FeatureSectionFour::create([

            // ================= UPPER SECTION =================
            'upper_image' => 'features/section-four/bg-1.jpg',

            'upper_title_az' => 'Enerji Sərfiyyatını Optimallaşdırın',
            'upper_title_en' => 'Optimise Energy Consumption',
            'upper_title_ru' => 'Оптимизация энергопотребления',
            'upper_title_de' => 'Energieverbrauch optimieren',
            'upper_title_fr' => 'Optimiser la consommation d’énergie',
            'upper_title_es' => 'Optimizar el consumo de energía',
            'upper_title_zh' => '优化能源消耗',

            'upper_description_az' => 'Ağıllı sistemlərlə enerji istifadənizi daha səmərəli və qənaətli edin.',
            'upper_description_en' => 'Use smart systems to reduce and control your energy usage efficiently.',
            'upper_description_ru' => 'Используйте умные системы для эффективного контроля энергопотребления.',
            'upper_description_de' => 'Nutzen Sie intelligente Systeme zur effizienten Energienutzung.',
            'upper_description_fr' => 'Utilisez des systèmes intelligents pour réduire la consommation.',
            'upper_description_es' => 'Utilice sistemas inteligentes para reducir el consumo.',
            'upper_description_zh' => '使用智能系统有效控制能源使用。',

            // Upper icons + urls
            'upper_icon_1' => 'flaticon-laptop',
            'upper_icon_1_url' => '#',

            'upper_icon_2' => 'flaticon-battery-1',
            'upper_icon_2_url' => '#',

            'upper_icon_3' => 'flaticon-idea-1',
            'upper_icon_3_url' => '#',

            'upper_icon_4' => 'flaticon-battery-warning',
            'upper_icon_4_url' => '#',

            // ================= LOWER SECTION =================
            'lower_image' => 'features/section-four/device.png',

            'lower_title_az' => 'Günəş Enerjisindən İstifadə Edin',
            'lower_title_en' => 'Harness the Sun’s Power',
            'lower_title_ru' => 'Используйте энергию солнца',
            'lower_title_de' => 'Nutzen Sie die Sonnenenergie',
            'lower_title_fr' => 'Exploitez l’énergie solaire',
            'lower_title_es' => 'Aprovecha la energía solar',
            'lower_title_zh' => '利用太阳能',

            'lower_description_az' => 'Bərpa olunan enerji mənbələri ilə ekoloji və davamlı həllər əldə edin.',
            'lower_description_en' => 'Get sustainable and eco-friendly solutions with renewable energy.',
            'lower_description_ru' => 'Получите экологичные решения с возобновляемой энергией.',
            'lower_description_de' => 'Nachhaltige Lösungen mit erneuerbarer Energie.',
            'lower_description_fr' => 'Solutions durables grâce aux énergies renouvelables.',
            'lower_description_es' => 'Soluciones sostenibles con energía renovable.',
            'lower_description_zh' => '通过可再生能源获得可持续解决方案。',

            'button_url' => '/smart-devices',

            'is_active' => true,
        ]);
    }
}
