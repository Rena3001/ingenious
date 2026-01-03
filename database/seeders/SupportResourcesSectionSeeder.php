<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupportResourcesSection;

class SupportResourcesSectionSeeder extends Seeder
{
    public function run(): void
    {
        SupportResourcesSection::updateOrCreate(
            ['id' => 1], // single section logic
            [
                /* =====================
                   SECTION TITLE
                ====================== */
                'section_title_en' => 'Support Resources',
                'section_title_az' => 'Dəstək Resursları',
                'section_title_ru' => 'Ресурсы поддержки',
                'section_title_de' => 'Support-Ressourcen',
                'section_title_fr' => 'Ressources de support',
                'section_title_es' => 'Recursos de soporte',
                'section_title_zh' => '支持资源',

                /* =====================
                   ITEM 1 – GUIDES
                ====================== */
                'item_1_icon' => 'fa-book-open',
                'item_1_title_en' => 'Guides & Tutorials',
                'item_1_title_az' => 'Təlimatlar və Video Bələdçilər',
                'item_1_title_ru' => 'Руководства и видеоуроки',
                'item_1_title_de' => 'Anleitungen & Tutorials',
                'item_1_title_fr' => 'Guides et tutoriels',
                'item_1_title_es' => 'Guías y tutoriales',
                'item_1_title_zh' => '指南与教程',

                /* =====================
                   ITEM 2 – FAQ
                ====================== */
                'item_2_icon' => 'fa-circle-play',
                'item_2_title_en' => 'Frequently Asked Questions (FAQ)',
                'item_2_title_az' => 'Tez-tez Verilən Suallar (FAQ)',
                'item_2_title_ru' => 'Часто задаваемые вопросы',
                'item_2_title_de' => 'Häufig gestellte Fragen',
                'item_2_title_fr' => 'Questions fréquentes',
                'item_2_title_es' => 'Preguntas frecuentes',
                'item_2_title_zh' => '常见问题',

                /* =====================
                   ITEM 3 – WARRANTY
                ====================== */
                'item_3_icon' => 'fa-graduation-cap',
                'item_3_title_en' => 'Warranty & Service',
                'item_3_title_az' => 'Zəmanət və Servis',
                'item_3_title_ru' => 'Гарантия и сервис',
                'item_3_title_de' => 'Garantie & Service',
                'item_3_title_fr' => 'Garantie et service',
                'item_3_title_es' => 'Garantía y servicio',
                'item_3_title_zh' => '保修与服务',

                'is_active' => true,
            ]
        );
    }
}
