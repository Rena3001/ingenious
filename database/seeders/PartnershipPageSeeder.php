<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PartnershipPage;

class PartnershipPageSeeder extends Seeder
{
    public function run(): void
    {
        PartnershipPage::create([
            /* =========================
             | Page Title
             ========================= */
            'page_title_az' => 'Əməkdaşlıq & Partnyorluq',
            'page_title_en' => 'Cooperation & Partnership',
            'page_title_ru' => 'Сотрудничество и Партнёрство',
            'page_title_de' => 'Zusammenarbeit & Partnerschaft',
            'page_title_fr' => 'Coopération & Partenariat',
            'page_title_es' => 'Cooperación y Asociación',
            'page_title_zh' => '合作与伙伴关系',

            /* =========================
             | Sidebar Title
             ========================= */
            'sidebar_title_az' => 'Əməkdaşlıq & Partnyorluq',
            'sidebar_title_en' => 'Cooperation & Partnership',
            'sidebar_title_ru' => 'Сотрудничество и Партнёрство',
            'sidebar_title_de' => 'Zusammenarbeit & Partnerschaft',
            'sidebar_title_fr' => 'Coopération & Partenariat',
            'sidebar_title_es' => 'Cooperación y Asociación',
            'sidebar_title_zh' => '合作与伙伴关系',

            /* =========================
             | Category
             ========================= */
            'category_az' => 'BAMoONE Ekosistemi',
            'category_en' => 'BAMoONE Ecosystem',
            'category_ru' => 'Экосистема BAMoONE',
            'category_de' => 'BAMoONE Ökosystem',
            'category_fr' => 'Écosystème BAMoONE',
            'category_es' => 'Ecosistema BAMoONE',
            'category_zh' => 'BAMoONE 生态系统',

            /* =========================
             | Intro Text
             ========================= */
            'intro_text_az' => 'Etibarlı, açıq və uzunmüddətli əməkdaşlıq ekosistemi.',
            'intro_text_en' => 'A trusted, open, and long-term collaboration ecosystem.',
            'intro_text_ru' => 'Надёжная, открытая и долгосрочная экосистема сотрудничества.',
            'intro_text_de' => 'Ein vertrauensvolles, offenes und langfristiges Kooperationsökosystem.',
            'intro_text_fr' => 'Un écosystème de collaboration fiable, ouvert et à long terme.',
            'intro_text_es' => 'Un ecosistema de colaboración confiable, abierto y a largo plazo.',
            'intro_text_zh' => '一个值得信赖、开放且长期的合作生态系统。',

            /* =========================
             | Description Text
             ========================= */
            'description_text_az' =>
                'BAMoONE distribyutorlar, satıcılar, xidmət təminatçıları və müxtəlif biznes tərəfdaşları ilə əməkdaşlığa açıq olan çevik və dinamik bir ekosistemdir. Məqsədimiz yalnız məhsul təqdim etmək deyil, qarşılıqlı etimada əsaslanan dayanıqlı və uzunmüddətli tərəfdaşlıqlar qurmaqdır.
                
Bizim üçün partnyorluq sadəcə iş birliyi deyil. Bu, tərəfdaşlarımızın inkişafına dəstək olmaq, texniki bilik və təcrübə paylaşmaq, lazım olduqda məsləhət və istiqamət vermək, həmçinin BAMoONE brendi altında birgə layihələr həyata keçirmək deməkdir.',

            'description_text_en' =>
                'BAMoONE is a flexible and dynamic ecosystem that welcomes collaboration with distributors, retailers, service providers, and various business partners. Our goal is not only to offer products, but to build sustainable partnerships based on mutual trust and long-term value.

For us, partnership is more than a business agreement. It means supporting our partners’ growth, sharing technical knowledge and experience, offering guidance when needed, and developing joint projects under the BAMoONE brand.',

            'description_text_ru' =>
                'BAMoONE — это гибкая и динамичная экосистема, открытая для сотрудничества с дистрибьюторами, продавцами, поставщиками услуг и различными бизнес-партнёрами. Наша цель — не только предлагать продукты, но и выстраивать устойчивые партнёрства на основе доверия и долгосрочной ценности.

Для нас партнёрство — это не просто деловое соглашение, а поддержка развития партнёров, обмен опытом и техническими знаниями, консультации и совместные проекты под брендом BAMoONE.',

            'description_text_de' =>
                'BAMoONE ist ein flexibles und dynamisches Ökosystem, das die Zusammenarbeit mit Distributoren, Händlern, Dienstleistern und verschiedenen Geschäftspartnern begrüßt. Unser Ziel ist es nicht nur, Produkte anzubieten, sondern nachhaltige Partnerschaften auf Basis von Vertrauen und langfristigem Mehrwert aufzubauen.

Partnerschaft bedeutet für uns Unterstützung beim Wachstum unserer Partner, Wissensaustausch, Beratung und die Umsetzung gemeinsamer Projekte unter der Marke BAMoONE.',

            'description_text_fr' =>
                'BAMoONE est un écosystème flexible et dynamique ouvert à la coopération avec des distributeurs, détaillants, prestataires de services et partenaires commerciaux. Notre objectif n’est pas seulement de proposer des produits, mais de bâtir des partenariats durables basés sur la confiance et la valeur à long terme.

Pour nous, le partenariat signifie accompagner le développement de nos partenaires, partager l’expertise technique, offrir des conseils et réaliser des projets communs sous la marque BAMoONE.',

            'description_text_es' =>
                'BAMoONE es un ecosistema flexible y dinámico que da la bienvenida a la cooperación con distribuidores, minoristas, proveedores de servicios y diversos socios comerciales. Nuestro objetivo no es solo ofrecer productos, sino construir alianzas sostenibles basadas en la confianza mutua y el valor a largo plazo.

Para nosotros, la asociación significa apoyar el crecimiento de nuestros socios, compartir conocimientos técnicos, brindar asesoramiento y desarrollar proyectos conjuntos bajo la marca BAMoONE.',

            'description_text_zh' =>
                'BAMoONE 是一个灵活且充满活力的生态系统，欢迎与分销商、零售商、服务提供商及各类商业伙伴合作。我们的目标不仅是提供产品，更是建立基于信任和长期价值的可持续伙伴关系。

对我们而言，伙伴关系意味着支持伙伴成长、分享技术经验、提供指导，并在 BAMoONE 品牌下共同开展项目。',

            /* =========================
             | Lists
             ========================= */
            'collaboration_types' => [
                ['value' => 'Purchasing and selling our products'],
                ['value' => 'Developing product projects under our brand'],
                ['value' => 'Receiving technical and marketing support'],
                ['value' => 'Benefiting from advisory and guidance services'],
                ['value' => 'Other business initiatives'],
            ],

            'principles' => [
                ['value' => 'Open and flexible cooperation approach'],
                ['value' => 'Individual and attentive approach to every partner'],
                ['value' => 'Growth based on long-term trusted collaboration'],
            ],

            /* =========================
             | CTA
             ========================= */
            'cta_button_link' => '/#cooperation-form',

            /* =========================
             | Images (empty by default)
             ========================= */
            'image_1' => null,
            'image_2' => null,
            'image_3' => null,

            'is_active' => true,
        ]);
    }
}
