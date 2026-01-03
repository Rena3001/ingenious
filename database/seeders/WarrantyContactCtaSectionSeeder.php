<?php

namespace Database\Seeders;

use App\Models\WarrantyContactCtaSection;
use Illuminate\Database\Seeder;

class WarrantyContactCtaSectionSeeder extends Seeder
{
    public function run(): void
    {
        WarrantyContactCtaSection::create([

            /* =====================
               BACKGROUND (optional)
            ===================== */
            'background_image' => null,

            /* =====================
               TITLE (41)
            ===================== */
            'title_en' => 'BAMoONE — wherever you seek comfort and safety.',
            'title_az' => 'BAMoONE — harada rahatlıq və təhlükəsizlik axtarırsınızsa, oradadır.',
            'title_ru' => 'BAMoONE — где бы вы ни искали комфорт и безопасность.',
            'title_de' => 'BAMoONE — wo immer Sie Komfort und Sicherheit suchen.',
            'title_fr' => 'BAMoONE — où que vous recherchiez confort et sécurité.',
            'title_es' => 'BAMoONE — dondequiera que busque comodidad y seguridad.',
            'title_zh' => 'BAMoONE —— 无论您在哪里寻求舒适与安全。',

            /* =====================
               DESCRIPTION (41.1)
            ===================== */
            'description_en' => 'Thank you for choosing BAMoONE — you deserve the best.',
            'description_az' => 'BAMoONE seçdiyiniz üçün təşəkkür edirik — siz ən yaxşına layiqsiniz.',
            'description_ru' => 'Спасибо, что выбрали BAMoONE — вы заслуживаете лучшего.',
            'description_de' => 'Vielen Dank, dass Sie sich für BAMoONE entschieden haben — Sie verdienen das Beste.',
            'description_fr' => 'Merci d’avoir choisi BAMoONE — vous méritez ce qu’il y a de mieux.',
            'description_es' => 'Gracias por elegir BAMoONE — usted merece lo mejor.',
            'description_zh' => '感谢您选择 BAMoONE —— 您值得最好的。',

            /* =====================
               CTA (41.2)
            ===================== */

            'button_link' => '/contact',

            'is_active' => true,
        ]);
    }
}
