<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeAbout;

class HomeAboutSeeder extends Seeder
{
    public function run(): void
    {
        HomeAbout::updateOrCreate(
            ['id' => 1],
            [
                /* =========================
                 | TITLE
                 ========================= */
                'title_az' => 'BAMoONE',
                'title_en' => 'BAMoONE',
                'title_ru' => 'BAMoONE',
                'title_de' => 'BAMoONE',
                'title_es' => 'BAMoONE',

                /* =========================
                 | DESCRIPTION
                 ========================= */
                'desc_en' => 'BAMoONE is a modern brand that offers practical and innovative security and technology solutions tailored to various user needs. Our products range from mechanical and smart locks to cameras and smart devices, providing a wide selection for different environments. With our durable, user-friendly, and highly reliable solutions, you gain full control and long-lasting comfort in both your home and workplace.',

                'desc_az' => 'BAMoONE, müxtəlif istifadəçi ehtiyaclarına uyğunlaşdırılmış praktiki və innovativ təhlükəsizlik və texnoloji həllər təqdim edən müasir bir brenddir. Məhsullarımız mexaniki və smart kilidlərdən tutmuş kameralar və ağıllı avadanlıqlara qədər geniş seçim imkanı yaradır. Uzunömürlü, istifadəsi rahat və yüksək etibarlılığa malik həllərimizlə ev və iş mühitinizdə tam nəzarət və dayanıqlı rahatlıq təmin edirsiniz.',

                'desc_ru' => 'BAMoONE — современный бренд, предлагающий практичные и инновационные решения в области безопасности и технологий, адаптированные под различные потребности пользователей.',

                'desc_de' => 'BAMoONE ist eine moderne Marke, die praktische und innovative Sicherheits- und Technologielösungen für unterschiedliche Nutzerbedürfnisse anbietet.',

                'desc_es' => 'BAMoONE es una marca moderna que ofrece soluciones prácticas e innovadoras de seguridad y tecnología.',

                /* =========================
                 | IMAGES
                 ========================= */
                'image' => 'home/about/main.png',                // ikon/ön şəkil
                'background_image' => 'home/about/bg-sketch.png', // otaq sketch fonu

                'is_active' => true,
            ]
        );
    }
}
