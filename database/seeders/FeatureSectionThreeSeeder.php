<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FeatureSectionThree;

class FeatureSectionThreeSeeder extends Seeder
{
    public function run(): void
    {
        FeatureSectionThree::create([

            /*
            |--------------------------------------------------------------------------
            | UPPER SECTION
            |--------------------------------------------------------------------------
            */
            'upper_image' => 'features/section-three/upper-bg.jpg',

            'upper_title_az' => 'Enerji Səmərəliliyi',
            'upper_title_en' => 'Energy Efficiency',
            'upper_title_ru' => 'Энергоэффективность',
            'upper_title_de' => 'Energieeffizienz',
            'upper_title_fr' => "Efficacité énergétique",
            'upper_title_es' => 'Eficiencia Energética',
            'upper_title_zh' => '能源效率',

            'upper_description_az' =>
                'Ağıllı texnologiyalar sayəsində enerji istehlakını minimuma endirin və maksimum fayda əldə edin.',
            'upper_description_en' =>
                'Reduce energy consumption and increase performance with smart energy solutions.',
            'upper_description_ru' =>
                'Снижайте потребление энергии и повышайте эффективность с помощью умных решений.',
            'upper_description_de' =>
                'Reduzieren Sie den Energieverbrauch und steigern Sie die Leistung mit intelligenten Energielösungen.',
            'upper_description_fr' =>
                "Réduisez la consommation d'énergie et augmentez les performances grâce à des solutions énergétiques intelligentes.",
            'upper_description_es' =>
                'Reduzca el consumo de energía y aumente el rendimiento con soluciones energéticas inteligentes.',
            'upper_description_zh' =>
                '通过智能能源解决方案降低能耗并提高性能。',

            /*
            |--------------------------------------------------------------------------
            | UPPER ICON 1
            |--------------------------------------------------------------------------
            */
            'upper_icon_1_title_az' => 'Ağıllı İsitmə',
            'upper_icon_1_title_en' => 'Smart Heating',
            'upper_icon_1_title_ru' => 'Умное отопление',
            'upper_icon_1_title_de' => 'Intelligente Heizung',
            'upper_icon_1_title_fr' => "Chauffage intelligent",
            'upper_icon_1_title_es' => 'Calefacción Inteligente',
            'upper_icon_1_title_zh' => '智能供暖',

            'upper_icon_1_desc_az' =>
                'İstilik sistemlərini avtomatik idarə edərək enerjiyə qənaət edin.',
            'upper_icon_1_desc_en' =>
                'Automatically control heating systems to save energy.',
            'upper_icon_1_desc_ru' =>
                'Автоматическое управление отоплением для экономии энергии.',
            'upper_icon_1_desc_de' =>
                'Automatische Steuerung von Heizsystemen zur Energieeinsparung.',
            'upper_icon_1_desc_fr' =>
                "Contrôlez automatiquement les systèmes de chauffage pour économiser de l'énergie.",
            'upper_icon_1_desc_es' =>
                'Controle automáticamente los sistemas de calefacción para ahorrar energía.',
            'upper_icon_1_desc_zh' =>
                '自动控制供暖系统以节省能源。',

            /*
            |--------------------------------------------------------------------------
            | UPPER ICON 2
            |--------------------------------------------------------------------------
            */
            'upper_icon_2_title_az' => 'Enerji Nəzarəti',
            'upper_icon_2_title_en' => 'Energy Control',
            'upper_icon_2_title_ru' => 'Контроль энергии',
            'upper_icon_2_title_de' => 'Energie Kontrolle',
            'upper_icon_2_title_fr' => "Contrôle de l'énergie",
            'upper_icon_2_title_es' => 'Control de Energía',
            'upper_icon_2_title_zh' => '能源控制',

            'upper_icon_2_desc_az' =>
                'Bütün enerji axınını real vaxtda izləyin və analiz edin.',
            'upper_icon_2_desc_en' =>
                'Monitor and analyze all energy usage in real time.',
            'upper_icon_2_desc_ru' =>
                'Отслеживайте и анализируйте энергопотребление в реальном времени.',
            'upper_icon_2_desc_de' =>
                'Überwachen und analysieren Sie den gesamten Energieverbrauch in Echtzeit.',
            'upper_icon_2_desc_fr' =>
                "Surveillez et analysez toute la consommation d'énergie en temps réel.",
            'upper_icon_2_desc_es' =>
                'Monitoree y analice todo el consumo de energía en tiempo real.',
            'upper_icon_2_desc_zh' =>
                '实时监控和分析所有能源使用情况。',

            /*
            |--------------------------------------------------------------------------
            | UPPER ICON 3
            |--------------------------------------------------------------------------
            */
            'upper_icon_3_title_az' => 'Ağıllı Avtomatika',
            'upper_icon_3_title_en' => 'Smart Automation',
            'upper_icon_3_title_ru' => 'Умная автоматизация',
            'upper_icon_3_title_de' => 'Intelligente Automatisierung',
            'upper_icon_3_title_fr' => "Automatisation intelligente",
            'upper_icon_3_title_es' => 'Automatización Inteligente',
            'upper_icon_3_title_zh' => '智能自动化',

            'upper_icon_3_desc_az' =>
                'Avadanlıqları ssenarilər əsasında avtomatik işlədin.',
            'upper_icon_3_desc_en' =>
                'Automate devices using smart scenarios.',
            'upper_icon_3_desc_ru' =>
                'Автоматизируйте устройства с помощью сценариев.',
            'upper_icon_3_desc_de' =>
                'Automatisieren Sie Geräte mit intelligenten Szenarien.',
            'upper_icon_3_desc_fr' =>
                "Automatisez les appareils à l'aide de scénarios intelligents.",
            'upper_icon_3_desc_es' =>
                'Automatice los dispositivos utilizando escenarios inteligentes.',
            'upper_icon_3_desc_zh' =>
                '使用智能场景自动化设备。',

            /*
            |--------------------------------------------------------------------------
            | LOWER SECTION
            |--------------------------------------------------------------------------
            */
            'lower_image' => 'features/section-three/devices.png',

            'lower_title_az' => 'Günəş Enerjisindən İstifadə',
            'lower_title_en' => 'Use the Sun’s Power',
            'lower_title_ru' => 'Используйте энергию солнца',
            'lower_title_de' => 'Nutzen Sie die Kraft der Sonne',
            'lower_title_fr' => "Utilisez la puissance du soleil",
            'lower_title_es' => 'Utilice el Poder del Sol',
            'lower_title_zh' => '利用太阳的力量',

            'lower_description_az' =>
                'Günəş enerjisi ilə işləyən sistemlər vasitəsilə xərclərinizi azaldın.',
            'lower_description_en' =>
                'Lower your costs by using solar-powered smart systems.',
            'lower_description_ru' =>
                'Снижайте расходы с помощью солнечных энергосистем.',
            'lower_description_de' =>
                'Senken Sie Ihre Kosten durch die Nutzung solarbetriebener intelligenter Systeme.',
            'lower_description_fr' =>
                "Réduisez vos coûts en utilisant des systèmes intelligents alimentés par l'énergie solaire.",
            'lower_description_es' =>
                'Reduzca sus costos utilizando sistemas inteligentes alimentados por energía solar.',
            'lower_description_zh' =>
                '通过使用太阳能智能系统来降低您的成本。',

            /*
            |--------------------------------------------------------------------------
            | LOWER ICONS (STATIC)
            |--------------------------------------------------------------------------
            */
            'lower_icon_1' => 'flaticon-plug-1',
            'lower_icon_2' => 'flaticon-radiation',
            'lower_icon_3' => 'flaticon-flash',
            'lower_icon_4' => 'flaticon-laptop',

            'lower_icon_1_url' => '#',
            'lower_icon_2_url' => '#',
            'lower_icon_3_url' => '#',
            'lower_icon_4_url' => '#'
        ]);
    }
}
