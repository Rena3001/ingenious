<?php

namespace Database\Seeders;

use App\Models\WarrantyProcessSection;
use Illuminate\Database\Seeder;

class WarrantyProcessSectionSeeder extends Seeder
{
    public function run(): void
    {
        WarrantyProcessSection::create([

            /* =====================
               BACKGROUND
            ===================== */
            'background_image' => 'process/warranty-process-bg.jpg',

            /* =====================
               TITLE (36)
            ===================== */
            'title_en' => 'BAMoONE – For a Safer, Smarter, and More Comfortable Life',
            'title_az' => 'BAMoONE – Daha təhlükəsiz, daha ağıllı və daha rahat bir həyat üçün',
            'title_ru' => 'BAMoONE – Для более безопасной, умной и комфортной жизни',
            'title_de' => 'BAMoONE – Für ein sichereres, intelligenteres und komfortableres Leben',
            'title_fr' => 'BAMoONE – Pour une vie plus sûre, plus intelligente et plus confortable',
            'title_es' => 'BAMoONE – Para una vida más segura, inteligente y cómoda',
            'title_zh' => 'BAMoONE —— 更安全、更智能、更舒适的生活',

            /* =====================
               DESCRIPTION (36.1)
            ===================== */
            'description_en' =>
                'BAMoONE is a modern brand that delivers practical and innovative security and technology solutions tailored to different user needs. Our range includes everything from mechanical and smart locks to cameras and smart devices.',
            'description_az' =>
                'BAMoONE, müxtəlif istifadəçi ehtiyaclarına uyğunlaşdırılmış praktiki və innovativ təhlükəsizlik və texnoloji həllər təqdim edən müasir bir brenddir.',
            'description_ru' =>
                'BAMoONE — современный бренд, предлагающий практичные и инновационные решения в области безопасности и технологий.',
            'description_de' =>
                'BAMoONE ist eine moderne Marke, die praktische und innovative Sicherheits- und Technologielösungen anbietet.',
            'description_fr' =>
                'BAMoONE est une marque moderne proposant des solutions de sécurité et de technologie pratiques et innovantes.',
            'description_es' =>
                'BAMoONE es una marca moderna que ofrece soluciones de seguridad y tecnología prácticas e innovadoras.',
            'description_zh' =>
                'BAMoONE 是一个现代品牌，提供实用且创新的安全与科技解决方案。',

            /* =====================
               ICON 1 — MISSION (37)
            ===================== */
            'icon_1' => 'flaticon-target',

            'icon_1_title_en' => 'Our Mission',
            'icon_1_title_az' => 'Missiyamız',
            'icon_1_title_ru' => 'Наша миссия',
            'icon_1_title_de' => 'Unsere Mission',
            'icon_1_title_fr' => 'Notre mission',
            'icon_1_title_es' => 'Nuestra misión',
            'icon_1_title_zh' => '我们的使命',

            'icon_1_desc_en' =>
                'To provide safe, convenient, and easy-to-use traditional and smart solutions for everyone.',
            'icon_1_desc_az' =>
                'İnsanlar üçün təhlükəsiz, rahat və istifadəsi asan ənənəvi və smart həllər təqdim etmək.',
            'icon_1_desc_ru' =>
                'Предоставлять безопасные, удобные и простые в использовании решения для всех.',
            'icon_1_desc_de' =>
                'Sichere, bequeme und einfach zu bedienende Lösungen für alle bereitzustellen.',
            'icon_1_desc_fr' =>
                'Fournir des solutions sûres, pratiques et faciles à utiliser pour tous.',
            'icon_1_desc_es' =>
                'Proporcionar soluciones seguras, cómodas y fáciles de usar para todos.',
            'icon_1_desc_zh' =>
                '为所有人提供安全、便捷、易用的传统及智能解决方案。',

            /* =====================
               ICON 2 — VISION (38)
            ===================== */
            'icon_2' => 'flaticon-eye',

            'icon_2_title_en' => 'Our Vision',
            'icon_2_title_az' => 'Vizyonumuz',
            'icon_2_title_ru' => 'Наше видение',
            'icon_2_title_de' => 'Unsere Vision',
            'icon_2_title_fr' => 'Notre vision',
            'icon_2_title_es' => 'Nuestra visión',
            'icon_2_title_zh' => '我们的愿景',

            'icon_2_desc_en' =>
                'To become a trusted international brand offering solutions for today and the future.',
            'icon_2_desc_az' =>
                'Bu günün və gələcəyin tələblərinə cavab verən etibarlı beynəlxalq brendə çevrilmək.',
            'icon_2_desc_ru' =>
                'Стать надежным международным брендом, отвечающим требованиям настоящего и будущего.',
            'icon_2_desc_de' =>
                'Eine vertrauenswürdige internationale Marke für heute und die Zukunft zu werden.',
            'icon_2_desc_fr' =>
                'Devenir une marque internationale fiable pour aujourd’hui et demain.',
            'icon_2_desc_es' =>
                'Convertirse en una marca internacional confiable para hoy y el futuro.',
            'icon_2_desc_zh' =>
                '成为满足当今与未来需求的可信国际品牌。',

            /* =====================
               ICON 3 — VALUES (39)
            ===================== */
            'icon_3' => 'flaticon-diamond',

            'icon_3_title_en' => 'Our Values',
            'icon_3_title_az' => 'Dəyərlərimiz',
            'icon_3_title_ru' => 'Наши ценности',
            'icon_3_title_de' => 'Unsere Werte',
            'icon_3_title_fr' => 'Nos valeurs',
            'icon_3_title_es' => 'Nuestros valores',
            'icon_3_title_zh' => '我们的价值观',

            'icon_3_desc_en' =>
                'Reliability • Quality • Innovation • Customer Satisfaction',
            'icon_3_desc_az' =>
                'Etibarlılıq • Keyfiyyət • İnnovasiya • Müştəri Məmnuniyyəti',
            'icon_3_desc_ru' =>
                'Надежность • Качество • Инновации • Удовлетворенность клиентов',
            'icon_3_desc_de' =>
                'Zuverlässigkeit • Qualität • Innovation • Kundenzufriedenheit',
            'icon_3_desc_fr' =>
                'Fiabilité • Qualité • Innovation • Satisfaction client',
            'icon_3_desc_es' =>
                'Fiabilidad • Calidad • Innovación • Satisfacción del cliente',
            'icon_3_desc_zh' =>
                '可靠性 • 质量 • 创新 • 客户满意',

            /* =====================
               CTA (40)
            ===================== */
  

            'button_link' => '/why-bamoone',

            /* =====================
               STATUS
            ===================== */
            'is_active' => true,
        ]);
    }
}
