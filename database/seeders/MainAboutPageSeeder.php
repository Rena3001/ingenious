<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MainAboutPage;
use App\Models\MainAboutSection;
use App\Models\MainAboutCeoMessage;
use App\Models\MainAboutGallery;

class MainAboutPageSeeder extends Seeder
{
    public function run(): void
    {
        /* =====================================================
           MAIN ABOUT PAGE
        ===================================================== */
        $page = MainAboutPage::updateOrCreate(
            ['slug' => 'why-bamoone'],
            [
                'title_az' => 'Niyə BAMoONE?',
                'title_en' => 'Why BAMoONE?',
                'title_ru' => 'Почему BAMoONE?',
                'title_de' => 'Warum BAMoONE?',
                'title_es' => '¿Por qué BAMoONE?',
                'title_fr' => 'Pourquoi BAMoONE ?',
                'title_zh' => '为什么选择 BAMoONE？',

                'subtitle_az' => 'Daha təhlükəsiz, daha ağıllı və daha rahat bir həyat üçün.',
                'subtitle_en' => 'For a safer, smarter, and more comfortable life.',
                'subtitle_ru' => 'Для более безопасной, умной и комфортной жизни.',
                'subtitle_de' => 'Für ein sichereres, intelligenteres und komfortableres Leben.',
                'subtitle_es' => 'Para una vida más segura, inteligente y cómoda.',
                'subtitle_fr' => 'Pour une vie plus sûre, plus intelligente et plus confortable.',
                'subtitle_zh' => '为了更安全、更智能、更舒适的生活。',

                'intro_az' =>
                    'Smart və ya ənənəvi — seçim sizindir. Ən vacib olan isə təhlükəsizlik və rahatlıqdır. '
                    .'BAMoONE insanlara real dəyər qatmaq üçün yaradılmış müasir bir brenddir.',

                'intro_en' =>
                    'Smart or traditional — the choice is yours. What truly matters is safety and comfort. '
                    .'BAMoONE is a modern brand created to bring real value to people’s lives.',

                'intro_ru' =>
                    'Умное или традиционное — выбор за вами. Главное — безопасность и комфорт. '
                    .'BAMoONE — современный бренд, созданный для реальной пользы.',

                'intro_de' =>
                    'Smart oder traditionell — die Wahl liegt bei Ihnen. Entscheidend sind Sicherheit und Komfort. '
                    .'BAMoONE ist eine moderne Marke mit echtem Mehrwert.',

                'intro_es' =>
                    'Inteligente o tradicional — la elección es suya. Lo más importante es la seguridad y la comodidad. '
                    .'BAMoONE es una marca moderna creada para aportar valor real.',

                'intro_fr' =>
                    'Smart ou traditionnel — le choix vous appartient. L’essentiel est la sécurité et le confort. '
                    .'BAMoONE est une marque moderne conçue pour apporter une réelle valeur.',

                'intro_zh' =>
                    '智能或传统——选择权在您。真正重要的是安全与舒适。'
                    .'BAMoONE 是一个为人们生活带来真实价值的现代品牌。',

                'is_active' => true,
            ]
        );

        /* =====================================================
           SECTIONS
        ===================================================== */
        MainAboutSection::where('main_about_page_id', $page->id)->delete();

        $sections = [
            [
                'key' => 'mission',
                'type' => 'mission',
                'sort_order' => 1,
                'title_az' => 'Missiyamız',
                'title_en' => 'Our Mission',
                'title_ru' => 'Наша миссия',
                'title_de' => 'Unsere Mission',
                'title_es' => 'Nuestra misión',
                'title_fr' => 'Notre mission',
                'title_zh' => '我们的使命',
                'content_az' => 'İnsanlar üçün təhlükəsiz, rahat və istifadəsi asan ənənəvi və smart həllər təqdim etmək.',
                'content_en' => 'To provide safe, comfortable, and easy-to-use traditional and smart solutions.',
                'content_ru' => 'Предоставлять безопасные, удобные и простые в использовании традиционные и умные решения.',
                'content_de' => 'Sichere, komfortable und einfach zu bedienende traditionelle und smarte Lösungen anzubieten.',
                'content_es' => 'Ofrecer soluciones tradicionales y inteligentes seguras, cómodas y fáciles de usar.',
                'content_fr' => 'Fournir des solutions traditionnelles et intelligentes sûres, confortables et faciles à utiliser.',
                'content_zh' => '为人们提供安全、舒适、易于使用的传统和智能解决方案。',
            ],
            [
                'key' => 'goal',
                'type' => 'goal',
                'sort_order' => 2,
                'title_az' => 'Məqsədimiz',
                'title_en' => 'Our Goal',
                'title_ru' => 'Наша цель',
                'title_de' => 'Unser Ziel',
                'title_es' => 'Nuestro objetivo',
                'title_fr' => 'Notre objectif',
                'title_zh' => '我们的目标',
                'content_az' => 'Ağıllı texnologiyanı hər kəs üçün əlçatan etmək.',
                'content_en' => 'To make smart technology accessible to everyone.',
                'content_ru' => 'Сделать умные технологии доступными для всех.',
                'content_de' => 'Smarte Technologie für alle zugänglich machen.',
                'content_es' => 'Hacer que la tecnología inteligente sea accesible para todos.',
                'content_fr' => 'Rendre la technologie intelligente accessible à tous.',
                'content_zh' => '让智能技术惠及每一个人。',
            ],
            [
                'key' => 'vision',
                'type' => 'vision',
                'sort_order' => 3,
                'title_az' => 'Vizyonumuz',
                'title_en' => 'Our Vision',
                'title_ru' => 'Наше видение',
                'title_de' => 'Unsere Vision',
                'title_es' => 'Nuestra visión',
                'title_fr' => 'Notre vision',
                'title_zh' => '我们的愿景',
                'content_az' => 'Bu günün və gələcəyin tələblərinə cavab verən beynəlxalq etibarlı brend olmaq.',
                'content_en' => 'To become a trusted international brand meeting today’s and future needs.',
                'content_ru' => 'Стать международным надежным брендом, отвечающим требованиям настоящего и будущего.',
                'content_de' => 'Eine international vertrauenswürdige Marke für heutige und zukünftige Bedürfnisse werden.',
                'content_es' => 'Convertirse en una marca internacional confiable para las necesidades actuales y futuras.',
                'content_fr' => 'Devenir une marque internationale fiable répondant aux besoins d’aujourd’hui et de demain.',
                'content_zh' => '成为满足当今和未来需求的国际可信品牌。',
            ],
            [
                'key' => 'values',
                'type' => 'values',
                'sort_order' => 4,
                'title_az' => 'Dəyərlərimiz',
                'title_en' => 'Our Values',
                'title_ru' => 'Наши ценности',
                'title_de' => 'Unsere Werte',
                'title_es' => 'Nuestros valores',
                'title_fr' => 'Nos valeurs',
                'title_zh' => '我们的价值观',
                'content_az' => 'Etibarlılıq • Keyfiyyət • İnnovasiya • Müştəri Məmnuniyyəti',
                'content_en' => 'Reliability • Quality • Innovation • Customer Satisfaction',
                'content_ru' => 'Надежность • Качество • Инновации • Удовлетворенность клиентов',
                'content_de' => 'Zuverlässigkeit • Qualität • Innovation • Kundenzufriedenheit',
                'content_es' => 'Fiabilidad • Calidad • Innovación • Satisfacción del cliente',
                'content_fr' => 'Fiabilité • Qualité • Innovation • Satisfaction client',
                'content_zh' => '可靠性 • 质量 • 创新 • 客户满意度',
            ],
        ];

        foreach ($sections as $section) {
            MainAboutSection::create(array_merge(
                ['main_about_page_id' => $page->id],
                $section
            ));
        }

        /* =====================================================
           CEO MESSAGE
        ===================================================== */
        MainAboutCeoMessage::updateOrCreate(
            ['main_about_page_id' => $page->id],
            [
                'title_az' => 'Şirkət rəhbərindən müraciət',
                'title_en' => 'Message from the Founder & CEO',
                'title_ru' => 'Обращение основателя и CEO',
                'title_de' => 'Botschaft des Gründers & CEO',
                'title_es' => 'Mensaje del fundador y CEO',
                'title_fr' => 'Message du fondateur et PDG',
                'title_zh' => '创始人兼首席执行官致辞',

                'message_az' => 'BAMoONE brendi 2025-ci ildə yaradılmışdır və məqsədimiz insanların həyatına real dəyər qatmaqdır.',
                'message_en' => 'BAMoONE was founded in 2025 with the goal of adding real value to people’s lives.',
                'message_ru' => 'Бренд BAMoONE был основан в 2025 году с целью приносить реальную ценность людям.',
                'message_de' => 'BAMoONE wurde 2025 gegründet, um echten Mehrwert zu schaffen.',
                'message_es' => 'BAMoONE fue fundada en 2025 con el objetivo de aportar valor real.',
                'message_fr' => 'BAMoONE a été fondée en 2025 pour apporter une réelle valeur.',
                'message_zh' => 'BAMoONE 成立于 2025 年，致力于为人们的生活带来真正的价值。',

                'signature' => 'BAMoONE',
            ]
        );

        /* =====================================================
           GALLERY
        ===================================================== */
        MainAboutGallery::where('main_about_page_id', $page->id)->delete();

        MainAboutGallery::insert([
            ['main_about_page_id' => $page->id, 'image' => 'about/1.jpg', 'sort_order' => 1],
            ['main_about_page_id' => $page->id, 'image' => 'about/2.jpg', 'sort_order' => 2],
            ['main_about_page_id' => $page->id, 'image' => 'about/3.jpg', 'sort_order' => 3],
        ]);
    }
}

