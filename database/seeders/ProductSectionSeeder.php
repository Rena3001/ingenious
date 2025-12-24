<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ProductSection;
use Illuminate\Database\Seeder;

class ProductSectionSeeder extends Seeder
{
    public function run()
    {
        ProductSection::create([
            'background_image' => 'backgrounds/products-bg.jpg',

            'title_en' => 'BASIC COMPONENTS INCLUDED',
            'title_az' => 'ƏSAS KOMPONENTLƏR DAXİLDİR',
            'title_ru' => 'ОСНОВНЫЕ КОМПОНЕНТЫ ВКЛЮЧЕНЫ',
            'title_de' => 'GRUNDKOMPONENTEN EINBEZIEHEN',
            'title_fr' => 'COMPOSANTS DE BASE INCLUS',
            'title_es' => 'COMPONENTES BÁSICOS INCLUIDOS',
            'title_zh' => '基本组件已包含',

            'description_en' => 'Core smart home components included in the package.',
            'description_az' => 'Paketə daxil olan əsas inteqrasiya komponentləri.',
            'description_ru' => 'Основные компоненты умного дома, включенные в пакет.',
            'description_de' => 'Kernkomponenten des intelligenten Hauses, die im Paket enthalten sind.',
            'description_fr' => "Composants de base de la maison intelligente inclus dans le package.",
            'description_es' => "Componentes básicos de la casa inteligente incluidos en el paquete.",
            'description_zh' => "包装中包含的核心智能家居组件。",

            'product_1_image' => 'products/1.png',
            'product_1_title_en' => 'Miniserver Go',
            'product_1_title_az' => 'Miniserver Go',
            'product_1_title_ru' => 'Miniserver Go',
            'product_1_title_de' => 'Miniserver Go',
            'product_1_title_fr' => 'Miniserver Go',
            'product_1_title_es' => 'Miniserver Go',
            'product_1_title_zh' => 'Miniserver Go',

            'product_1_desc_en' => 'Compact smart home controller.',
            'product_1_desc_az' => 'Kompakt inteqrasiya idarəetmə sistemi.',
            'product_1_desc_ru' => 'Компактный контроллер умного дома.',
            'product_1_desc_de' => 'Kompakte Smart-Home-Steuerung.',
            'product_1_desc_fr' => "Contrôleur intelligent de maison compact.",
            'product_1_desc_es' => "Controlador inteligente de casa compacto.",
            'product_1_desc_zh' => "紧凑型智能家居控制器。",

            'product_2_image' => 'products/2.png',
            'product_2_title_en' => 'Miniserver Pro',
            'product_2_title_ru' => 'Miniserver Pro',
            'product_2_title_az' => 'Miniserver Pro',
            'product_2_title_de' => 'Miniserver Pro',
            'product_2_title_fr' => 'Miniserver Pro',
            'product_2_title_es' => 'Miniserver Pro',
            'product_2_title_zh' => 'Miniserver Pro',
            'product_2_desc_en' => 'Professional automation controller.',
            'product_2_desc_az' => 'Peşəkar avtomatlaşdırma idarəetmə sistemi.',
            'product_2_desc_ru' => 'Профессиональный контроллер автоматизации.',
            'product_2_desc_de' => 'Professioneller Automatisierungscontroller.',
            'product_2_desc_fr' => "Contrôleur d'automatisation professionnel.",
            'product_2_desc_es' => "Controlador de automatización profesional.",
            'product_2_desc_zh' => "专业自动化控制器。",

            'product_3_image' => 'products/3.png',
            'product_3_title_en' => 'Miniserver Zpt',
            'product_3_title_az' => 'Miniserver Zpt',
            'product_3_title_ru' => 'Miniserver Zpt',
            'product_3_title_de' => 'Miniserver Zpt',
            'product_3_title_fr' => 'Miniserver Zpt',
            'product_3_title_es' => 'Miniserver Zpt',
            'product_3_title_zh' => 'Miniserver Zpt',
            'product_3_desc_en' => 'Advanced energy control unit.',
            'product_3_desc_az' => 'Qabaqcıl enerji idarəetmə bloku.',
            'product_3_desc_ru' => 'Продвинутая система управления энергией.',
            'product_3_desc_de' => 'Erweiterte Energie-Steuereinheit.',
            'product_3_desc_fr' => "Unité de contrôle d'énergie avancée.",
            'product_3_desc_es' => "Unidad de control de energía avanzada.",
            'product_3_desc_zh' => "先进的能源控制单元。",


            'product_4_image' => 'products/4.png',
            'product_4_title_en' => 'Miniserver Fe',
            'product_4_title_az' => 'Miniserver Fe',
            'product_4_title_ru' => 'Miniserver Fe',
            'product_4_title_de' => 'Miniserver Fe',
            'product_4_title_fr' => 'Miniserver Fe',
            'product_4_title_es' => 'Miniserver Fe',
            'product_4_title_zh' => 'Miniserver Fe',
            'product_4_desc_en' => 'Flexible expansion module.',
            'product_4_desc_az' => 'Fleksib genişlənmə modulu.',
            'product_4_desc_ru' => 'Гибкий модуль расширения.',
            'product_4_desc_de' => 'Flexibles Erweiterungsmodul.',
            'product_4_desc_fr' => "Module d'expansion flexible.",
            'product_4_desc_es' => "Módulo de expansión flexible.",
            'product_4_desc_zh' => "灵活的扩展模块。",

            'button_url' => '/shop',
            'is_active' => true,
        ]);
    }
}
