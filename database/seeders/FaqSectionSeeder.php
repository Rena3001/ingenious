<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqSection;

class FaqSectionSeeder extends Seeder
{
    public function run(): void
    {
        FaqSection::create([
            /* =====================
               BACKGROUND
            ====================== */
            'background_image' => 'sections/faq/background.jpg',
            'image' => 'sections/faq/background.jpg',

            /* =====================
               TITLE – 17
            ====================== */
            'title_az' => 'Tez-tez Verilən Suallar',
            'title_en' => 'Frequently Asked Questions',
            'title_ru' => 'Часто задаваемые вопросы',
            'title_de' => 'Häufig gestellte Fragen',
            'title_fr' => 'Questions fréquemment posées',
            'title_es' => 'Preguntas frecuentes',
            'title_zh' => '常见问题',

            /* =====================
               DESCRIPTION – 17.1
            ====================== */
            'description_en' =>
                'We bring together the most common questions from our valued customers along with simple, clear answers — to make your experience easier.',
            'description_az' =>
                'Dəyərli müştərilərimizin ən çox soruşduğu sualları və onların sadə cavablarını bir yerə toplayaraq işinizi asanlaşdırmağa çalışırıq.',
            'description_ru' =>
                'Мы собрали самые частые вопросы наших клиентов и простые ответы на них, чтобы облегчить ваш опыт.',
            'description_de' =>
                'Wir haben die häufigsten Fragen unserer geschätzten Kunden zusammengetragen und einfache, klare Antworten darauf gegeben, um Ihr Erlebnis zu erleichtern.',
            'description_fr' =>
                'Nous rassemblons les questions les plus courantes de nos précieux clients avec des réponses simples et claires - pour faciliter votre expérience.',
            'description_es' =>
                'Reunimos las preguntas más comunes de nuestros valiosos clientes junto con respuestas simples y claras, para facilitar su experiencia.',
            'description_zh' =>
                '我们汇集了我们尊贵客户最常见的问题以及简单明了的答案——让您的体验更加轻松。',

            /* =====================
               FEATURE 1 – Installation Questions (17.2)
            ====================== */
            'feature_1_icon' => 'fa-solid fa-screwdriver-wrench',
            'feature_1_title_en' => 'Installation Questions',
            'feature_1_title_az' => 'Quraşdırma ilə bağlı suallar',
            'feature_1_title_ru' => 'Вопросы по установке',
            'feature_1_title_de' => 'Installationsfragen',
            'feature_1_title_fr' => "Questions d'installation",
            'feature_1_title_es' => 'Preguntas de instalación',
            'feature_1_title_zh' => '安装问题',

            'feature_1_text_en' =>
                'Common questions about installing locks and other security or home-related products.',
            'feature_1_text_az' =>
                'Kilidlərin və digər təhlükəsizlik və ev məhsullarının quraşdırılması ilə bağlı ən çox verilən suallar.',
            'feature_1_text_ru' =>
                'Часто задаваемые вопросы по установке замков и других устройств.',
            'feature_1_text_de' =>
                'Häufig gestellte Fragen zur Installation von Schlössern und anderen Sicherheits- oder Haushaltsprodukten.',
            'feature_1_text_fr' =>
                "Questions courantes sur l'installation de serrures et d'autres produits liés à la sécurité ou à la maison.",
            'feature_1_text_es' =>
                'Preguntas comunes sobre la instalación de cerraduras y otros productos relacionados con la seguridad o el hogar.',
            'feature_1_text_zh' =>
                '有关安装锁具和其他安全或家庭相关产品的常见问题。',

            /* =====================
               FEATURE 2 – Usage Questions
            ====================== */
            'feature_2_icon' => 'fa-solid fa-fingerprint',
            'feature_2_title_en' => 'Usage Questions',
            'feature_2_title_az' => 'İstifadə qaydası ilə bağlı suallar',
            'feature_2_title_ru' => 'Вопросы по использованию',
            'feature_2_title_de' => 'Nutzungsfragen',
            'feature_2_title_fr' => "Questions d'utilisation",
            'feature_2_title_es' => 'Preguntas de uso',
            'feature_2_title_zh' => '使用问题', 


            'feature_2_text_en' =>
                'Answers to common questions about using our security and home products effectively.',
            'feature_2_text_az' =>
                'Təhlükəsizlik və ev məhsullarımızdan effektiv istifadə ilə bağlı ən çox verilən suallara cavablar.',
            'feature_2_text_ru' =>
                'Ответы на распространенные вопросы об эффективном использовании нашей продукции для безопасности и дома.',
            'feature_2_text_de' =>
                'Antworten auf häufig gestellte Fragen zur effektiven Nutzung unserer Sicherheits- und Haushaltsprodukte.',
            'feature_2_text_fr' =>
                "Réponses aux questions courantes sur l'utilisation efficace de nos produits de sécurité et domestiques.",
            'feature_2_text_es' =>
                'Respuestas a preguntas comunes sobre el uso efectivo de nuestros productos de seguridad y para el hogar.',
            'feature_2_text_zh' =>
                '有关有效使用我们的安全和家庭产品的常见问题的答案。',

            /* =====================
               FEATURE 3 – Warranty & Service Questions
            ====================== */
            'feature_3_icon' => 'fa-solid fa-shield-halved',
            'feature_3_title_en' => 'Warranty & Service Questions',
            'feature_3_title_az' => 'Zəmanət və servis xidməti ilə bağlı suallar',
            'feature_3_title_ru' => 'Гарантия и сервис',
            'feature_3_title_de' => 'Garantie- und Servicefragen',
            'feature_3_title_fr' => 'Questions sur la garantie et le service',
            'feature_3_title_es' => 'Preguntas sobre garantía y servicio',
            'feature_3_title_zh' => '保修和服务问题',   
            'feature_3_text_en' =>
                'Information about warranties, repairs, and maintenance for our products.',
            'feature_3_text_az' =>
                'Məhsullarımız üçün zəmanətlər, təmir və texniki xidmət haqqında məlumat.',
            'feature_3_text_ru' =>
                'Информация о гарантиях, ремонте и обслуживании нашей продукции.',
            'feature_3_text_de' =>
                'Informationen zu Garantien, Reparaturen und Wartung unserer Produkte.',
            'feature_3_text_fr' =>
                "Informations sur les garanties, les réparations et l'entretien de nos produits.",
            'feature_3_text_es' =>
                'Información sobre garantías, reparaciones y mantenimiento de nuestros productos.',
            'feature_3_text_zh' =>
                '有关我们产品的保修、维修和维护的信息。',
        ]);
    }
}
