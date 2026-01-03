<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductVideoSections;

class ProductVideoSectionsSeeder extends Seeder
{
    public function run(): void
    {
        ProductVideoSections::create([
            /* =====================
               TITLE – 24
            ====================== */
            'title_az' => 'Satışda olan məhsullarımızın video bələdçisi',
            'title_en' => 'Our Products on Sale (Video Guide)',
            'title_ru' => 'Видеогид по продаваемым продуктам',
            'title_es' => 'Guía en video de productos en venta',
            'title_de' => 'Videoguide zu unseren Produkten',
            'title_fr' => 'Guide vidéo de nos produits',
            'title_zh' => '产品视频指南',

            /* =====================
               DESCRIPTION – 24.1
            ====================== */
            'description_az' =>
                'Brendimizin təqdim etdiyi bütün smart və təhlükəsizlik məhsullarını video bələdçilərlə birlikdə bu bölmədə tapa bilərsiniz.',
            'description_en' =>
                'Explore all smart and security products offered by our brand with clear and practical video guides.',
            'description_ru' =>
                'Ознакомьтесь со всеми умными и охранными продуктами с видеоруководствами.',
            'description_es' =>
                'Descubre todos nuestros productos inteligentes y de seguridad con guías en video.',
            'description_de' =>
                'Entdecken Sie alle Smart- und Sicherheitsprodukte mit Videoguides.',
            'description_fr' =>
                'Découvrez tous les produits intelligents et de sécurité avec des guides vidéo.',
            'description_zh' =>
                '通过视频指南了解我们所有的智能和安全产品。',

            /* =====================
               FILTER LABELS – 24.2 → 27.1
            ====================== */
            'filter_all_label'         => 'All Products',
            'filter_security_label'    => 'Security Products',
            'filter_home_label'        => 'Home Appliances',
            'filter_electrical_label'  => 'Electrical Equipment',
            'filter_electronics_label' => 'Consumer Electronics',

            'is_active' => true,
        ]);
    }
}
