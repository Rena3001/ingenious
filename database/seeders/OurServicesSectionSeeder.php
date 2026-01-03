<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OurServicesSection;

class OurServicesSectionSeeder extends Seeder
{
    public function run(): void
    {
        OurServicesSection::create([
            /* =====================
               SORT
            ====================== */
            'sort_order' => 1,

            /* =====================
               BACKGROUND – 19
            ====================== */
            'background_image' => 'sections/our-services/background.jpg',

            /* =====================
               SECTION TITLE – 20
            ====================== */
            'title_en' => 'Our Services',
            'title_az' => 'Təqdim Etdiyimiz Xidmətlər',
            'title_ru' => 'Наши услуги',
            'title_es' => 'Nuestros servicios',
            'title_de' => 'Unsere Dienstleistungen',
            'title_fr' => 'Nos services',
            'title_zh' => '我们的服务',

            /* =====================
               SECTION DESCRIPTION – 20.1
            ====================== */
            'description_en' =>
                'We bring together all technical support services to make installation, usage, and servicing of your products simpler and more accessible.',
            'description_az' =>
                'Müştərilərimiz üçün bütün texniki dəstək xidmətlərini bir araya gətirərək məhsulların quraşdırılması, istifadəsi və servis proseslərini daha sadə və əlçatan edirik.',
            'description_ru' =>
                'Мы объединяем все услуги технической поддержки, чтобы упростить и сделать более доступным установку, использование и обслуживание вашей продукции.',
            'description_es' =>
                'Reunimos todos los servicios de soporte técnico para facilitar la instalación, el uso y el mantenimiento de sus productos.',
            'description_de' =>
                'Wir bündeln alle technischen Supportdienste, um die Installation, Nutzung und Wartung Ihrer Produkte einfacher und zugänglicher zu machen.',
            'description_fr' =>
                'Nous rassemblons tous les services de support technique pour faciliter l\'installation, l\'utilisation et l\'entretien de vos produits.',
            'description_zh' =>
                '我们汇集了所有技术支持服务，使您的产品安装、使用和维护更加简单和便捷。',
            /* =================================================
               SERVICE 1 – Guides & Tutorials (21 → 21.3)
            ================================================= */
            'service_1_icon' => 'fa-solid fa-book-open',
            'service_1_title_en' => 'Guides & Tutorials',
            'service_1_title_az' => 'Təlimatlar və Video Bələdçilər',
            'service_1_title_ru' => 'Руководства и учебные пособия',
            'service_1_title_es' => 'Guías y tutoriales',
            'service_1_title_de' => 'Anleitungen und Tutorials',
            'service_1_title_fr' => 'Guides et tutoriels',
            'service_1_title_zh' => '指南和教程',

            'service_1_text_en' =>
                'Access clear manuals, illustrated guides, and step-by-step video tutorials to install, operate, and troubleshoot all BAMoONE products. Each model includes its official PDF manual and a quick-start guide for fast and easy setup.',
            'service_1_text_az' =>
                'Kilidlərdən tutmuş məişət cihazlarına, elektrik avadanlıqlarına və elektronika məhsullarına qədər bütün BAMoONE cihazlarının quraşdırılması, istifadəsi və problem həllini aydın təlimatlar, şəkilli izahlar və addım-addım video bələdçilər vasitəsilə öyrənə bilərsiniz. Hər model üçün rəsmi PDF manual və qısa başlanğıc bələdçisi mövcuddur.',
            'service_1_text_ru' =>
                'Получите доступ к понятным руководствам, иллюстрированным инструкциям и пошаговым видеоурокам по установке, эксплуатации и устранению неполадок всех продуктов BAMoONE. Каждая модель включает в себя официальное руководство в формате PDF и руководство по быстрому запуску для быстрой и легкой настройки.',
            'service_1_text_es' =>
                'Acceda a manuales claros, guías ilustradas y tutoriales en video paso a paso para instalar, operar y solucionar problemas de todos los productos BAMoONE. Cada modelo incluye su manual oficial en PDF y una guía de inicio rápido para una configuración rápida y sencilla.',     
            'service_1_text_de' =>
                'Greifen Sie auf klare Handbücher, illustrierte Anleitungen und Schritt-für-Schritt-Videotutorials zu, um alle BAMoONE-Produkte zu installieren, zu bedienen und Fehler zu beheben. Jedes Modell enthält sein offizielles PDF-Handbuch und eine Schnellstartanleitung für eine schnelle und einfache Einrichtung.',
            'service_1_text_fr' =>
                'Accédez à des manuels clairs, des guides illustrés et des tutoriels vidéo étape par étape pour installer, utiliser et dépanner tous les produits BAMoONE. Chaque modèle comprend son manuel officiel au format PDF et un guide de démarrage rapide pour une configuration rapide et facile.',
            'service_1_text_zh' =>
                '访问清晰的手册、图解指南和分步视频教程，以安装、操作和排除所有BAMoONE产品的故障。每个型号都包含其官方PDF手册和快速入门指南，便于快速轻松地设置。', 

            'service_1_button_url' => '/guides-tutorials',

            /* =================================================
               SERVICE 2 – FAQ (22 → 22.3)
            ================================================= */
            'service_2_icon' => 'fa-solid fa-circle-question',
            'service_2_title_en' => 'Frequently Asked Questions',
            'service_2_title_az' => 'Tez-tez Verilən Suallar',
            'service_2_title_ru' => 'Часто задаваемые вопросы',
            'service_2_title_es' => 'Preguntas frecuentes',
            'service_2_title_de' => 'Häufig gestellte Fragen',
            'service_2_title_fr' => 'Questions fréquemment posées',
            'service_2_title_zh' => '常见问题',

            'service_2_text_en' =>
                'Here you will find answers to the most common questions from our customers. Explore clear and practical explanations about installation, usage, troubleshooting, safety, and all related topics.',
            'service_2_text_az' =>
                'Müştərilərimizin ən çox verdiyi sualların cavablarını burada bir araya gətirdik. Quraşdırma, istifadə, problem həlli, təhlükəsizlik və digər bütün mövzular üzrə qısa, aydın və praktiki izahlarla tanış ola bilərsiniz.',
            'service_2_text_ru' =>
                'Здесь вы найдете ответы на самые распространенные вопросы наших клиентов. Ознакомьтесь с четкими и практическими объяснениями по установке, использованию, устранению неполадок, безопасности и всем связанным темам.',
            'service_2_text_es' =>
                'Aquí encontrará respuestas a las preguntas más comunes de nuestros clientes. Explore explicaciones claras y prácticas sobre instalación, uso, solución de problemas, seguridad y todos los temas relacionados.',       
            'service_2_text_de' =>
                'Hier finden Sie Antworten auf die häufigsten Fragen unserer Kunden. Entdecken Sie klare und praktische Erklärungen zu Installation, Nutzung, Fehlerbehebung, Sicherheit und allen verwandten Themen.', 
            'service_2_text_fr' =>
                'Ici, vous trouverez des réponses aux questions les plus courantes de nos clients. Découvrez des explications claires et pratiques sur l\'installation, l\'utilisation, le dépannage, la sécurité et tous les sujets connexes.', 
            'service_2_text_zh' =>
                '在这里，您将找到我们客户最常见问题的答案。探索有关安装、使用、故障排除、安全性及所有相关主题的清晰实用的解释。',

            'service_2_button_url' => '/faq',

            /* =================================================
               SERVICE 3 – Warranty & Service (23 → 23.3)
            ================================================= */
            'service_3_icon' => 'fa-solid fa-shield-halved',
            'service_3_title_en' => 'Warranty & Service',
            'service_3_title_az' => 'Zəmanət və Servis',
            'service_3_title_ru' => 'Гарантия и сервис',
            'service_3_title_es' => 'Garantía y servicio',
            'service_3_title_de' => 'Garantie & Service',
            'service_3_title_fr' => 'Garantie et service',
            'service_3_title_zh' => '保修与服务',   

            'service_3_text_en' =>
                'Find all details regarding warranty duration, replacement and return conditions, repair procedures, and how to request service support.',
            'service_3_text_az' =>
                'Zəmanət müddəti, dəyişmə və geri qaytarma şərtləri, təmir prosesi və servisə müraciət qaydaları haqqında bütün məlumatları burada tapa bilərsiniz.',
            'service_3_text_ru' =>
                'Здесь вы найдете все детали относительно срока гарантии, условий замены и возврата, процедур ремонта и способов запроса сервисной поддержки.',
            'service_3_text_es' =>
                'Encuentre todos los detalles sobre la duración de la garantía, las condiciones de reemplazo y devolución, los procedimientos de reparación y cómo solicitar soporte de servicio.',         
            'service_3_text_de' =>
                'Finden Sie alle Details zur Garantiedauer, zu Ersatz- und Rückgabebedingungen, zu Reparaturverfahren und wie Sie Serviceunterstützung anfordern können.',
            'service_3_text_fr' =>
                'Trouvez tous les détails concernant la durée de la garantie, les conditions de remplacement et de retour, les procédures de réparation et comment demander un support de service.',    
            'service_3_text_zh' =>
                '查找有关保修期限、更换和退货条件、维修程序以及如何请求服务支持的所有详细信息。',

            'service_3_button_url' => '/warranty-service',
        ]);
    }
}
