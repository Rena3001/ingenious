<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WhyBamooneTestimonials;

class WhyBamooneTestimonialsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'sort_order' => 1,
                'title_en' => 'WHY BAMoONE?',
                'title_az' => 'Niyə BAMoONE?',
                'title_ru' => 'ПОЧЕМУ BAMoONE?',
                'title_de' => 'WARUM BAMoONE?',
                'title_fr' => 'POURQUOI BAMoONE?',
                'title_es' => '¿POR QUÉ BAMoONE?',
                'title_zh' => '为什么选择BAMoONE？',
                'description_en' =>
                    'Our purpose is to create a safer, smarter, and more comfortable life. We design every product to simplify daily living, enhance security, and deliver reliable convenience.',
                'description_az' =>
                    'Bizim məqsədimiz daha təhlükəsiz, daha ağıllı və daha rahat həyat yaratmaqdır. Gündəlik həyatı sadələşdirən, təhlükəsizliyi artıran və rahatlıq təmin edən məhsullar təqdim edirik.',
                'description_ru' =>
                    'Наша цель - создать более безопасную, умную и комфортную жизнь. Мы разрабатываем каждый продукт, чтобы упростить повседневную жизнь, повысить безопасность и обеспечить надежное удобство.',
                'description_de' =>
                    'Unser Ziel ist es, ein sichereres, intelligenteres und komfortableres Leben zu schaffen. Wir entwerfen jedes Produkt, um den Alltag zu vereinfachen, die Sicherheit zu erhöhen und zuverlässigen Komfort zu bieten.',
                'description_fr' =>
                    'Notre objectif est de créer une vie plus sûre, plus intelligente et plus confortable. Nous concevons chaque produit pour simplifier la vie quotidienne, améliorer la sécurité et offrir une commodité fiable.',
                'description_es' =>
                    'Nuestro propósito es crear una vida más segura, inteligente y cómoda. Diseñamos cada producto para simplificar la vida diaria, mejorar la seguridad y ofrecer una comodidad confiable.',
                'description_zh' =>
                    '我们的目标是创造一个更安全、更智能、更舒适的生活。我们设计每一款产品，以简化日常生活，增强安全性，并提供可靠的便利性。',
            ],
            [
                'sort_order' => 2,
                'title_en' => 'Our Mission',
                'title_az' => 'Missiyamız',
                'title_ru' => 'Наша миссия',
                'title_de' => 'Unsere Mission',
                'title_fr' => 'Notre mission',
                'title_es' => 'Nuestra misión',
                'title_zh' => '我们的使命',
                'description_en' =>
                    'To provide safe, comfortable, and user-friendly traditional and smart solutions, making advanced technology accessible for everyone.',
                'description_az' =>
                    'İnsanlar üçün təhlükəsiz, rahat və istifadəsi asan ənənəvi və smart həllər təqdim etmək və ağıllı texnologiyanı hər kəs üçün əlçatan etmək.',
                'description_ru' =>
                    'Предоставлять безопасные, комфортные и удобные традиционные и умные решения, делая передовые технологии доступными для всех.',
                'description_de' =>
                    'Sichere, komfortable und benutzerfreundliche traditionelle und intelligente Lösungen bereitzustellen, um fortschrittliche Technologie für alle zugänglich zu machen.',
                'description_fr' =>
                    'Fournir des solutions traditionnelles et intelligentes sûres, confortables et conviviales, rendant la technologie avancée accessible à tous.',
                'description_es' =>
                    'Proporcionar soluciones tradicionales e inteligentes seguras, cómodas y fáciles de usar, haciendo que la tecnología avanzada sea accesible para todos.',
                'description_zh' =>
                    '提供安全、舒适且用户友好的传统和智能解决方案，使先进技术人人可及。',
            ],
            [
                'sort_order' => 3,
                'title_en' => 'Our Vision',
                'title_az' => 'Vizyonumuz',
                'description_en' =>
                    'To become a trusted international brand offering a diverse range of products that meet both today’s needs and future expectations.',
                'description_az' =>
                    'Bugünün və gələcəyin tələblərinə cavab verən geniş məhsul çeşidi ilə beynəlxalq səviyyədə etibarlı brendə çevrilmək.',
                'description_ru' =>
                    'Стать надежным международным брендом, предлагающим разнообразный ассортимент продукции, отвечающей как сегодняшним потребностям, так и будущим ожиданиям.',
                'description_de' =>
                    'Ein vertrauenswürdige internationale Marke zu werden, die eine vielfältige Produktpalette anbietet, die sowohl den heutigen Bedürfnissen als auch den zukünftigen Erwartungen gerecht wird.',
                'description_fr' =>
                    'Devenir une marque internationale de confiance offrant une gamme diversifiée de produits répondant aux besoins d\'aujourd\'hui et aux attentes futures.',
                'description_es' =>
                    'Convertirse en una marca internacional de confianza que ofrezca una amplia gama de productos que satisfagan tanto las necesidades actuales como las expectativas futuras.',
                'description_zh' =>
                    '成为一个值得信赖的国际品牌，提供多样化的产品，以满足当今的需求和未来的期望。',
            ],  
            [
                'sort_order' => 4,
                'title_en' => 'Our Values',
                'title_az' => 'Dəyərlərimiz',
                'title_ru' => 'Наши ценности',
                'title_de' => 'Unsere Werte',
                'title_fr' => 'Nos valeurs',
                'title_es' => 'Nuestros valores',
                'title_zh' => '我们的价值观',
                'description_en' =>
                    'Reliability, Quality, Innovation, Customer Satisfaction. High security standards. Smart & user-friendly technology. Durability and long lifespan. Technical support, video tutorials and PDF manuals.',
                'description_az' =>
                    'Etibarlılıq, Keyfiyyət, İnnovasiya, Müştəri Məmnuniyyəti. Yüksək təhlükəsizlik standartları. Asan istifadəli ağıllı texnologiyalar. Davamlılıq və uzunömürlülük. Texniki dəstək, video təlimlər və PDF kitabçalar.',
                'description_ru' =>
                    'Надежность, качество, инновации, удовлетворенность клиентов. Высокие стандарты безопасности. Умные и удобные технологии. Долговечность и долгий срок службы. Техническая поддержка, видеоуроки и PDF-руководства.',
                'description_de' =>
                    'Zuverlässigkeit, Qualität, Innovation, Kundenzufriedenheit. Hohe Sicherheitsstandards. Intelligente und benutzerfreundliche Technologie. Langlebigkeit und lange Lebensdauer. Technischer Support, Video-Tutorials und PDF-Handbücher.',
                'description_fr' =>
                    'Fiabilité, qualité, innovation, satisfaction client. Normes de sécurité élevées. Technologie intelligente et conviviale. Durabilité et longue durée de vie. Support technique, tutoriels   vidéo et manuels PDF.',
                'description_es' =>
                    'Fiabilidad, calidad, innovación, satisfacción del cliente. Altos estándares de seguridad. Tecnología inteligente y fácil de usar. Durabilidad y larga vida útil. Soporte técnico, tutoriales en video y manuales en PDF.',
                'description_zh' => 
                    '可靠性、质量、创新、客户满意度。高安全标准。智能且用户友好的技术。耐用性和长寿命。技术支持、视频教程和PDF手册。',
            ],
        ];

        foreach ($items as $item) {
            WhyBamooneTestimonials::updateOrCreate(
                ['sort_order' => $item['sort_order']],
                array_merge($item, [
                    'is_active' => true,
                    'image_logo' => null, // Filament-dən upload ediləcək
                ])
            );
        }
    }
}
