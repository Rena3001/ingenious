<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            /* =========================
             | NEWS
             ========================= */
            [
                'category' => 'news',
                'is_featured' => true,

                'title_az' => 'BAMoONE yeni məhsul xəttini təqdim etdi',
                'title_en' => 'BAMoONE Introduced a New Product Line',
                'title_ru' => 'BAMoONE представила новую линейку продуктов',
                'title_de' => 'BAMoONE stellte eine neue Produktlinie vor',
                'title_fr' => 'BAMoONE a présenté une nouvelle gamme de produits',
                'title_es' => 'BAMoONE presentó una nueva línea de productos',
                'title_zh' => 'BAMoONE 推出了全新产品线',

                'short_description_az' => 'Yeni məhsul xətti müasir texnologiyalar və innovativ həllər təqdim edir.',
                'short_description_en' => 'The new product line offers modern technologies and innovative solutions.',
                'short_description_ru' => 'Новая линейка продуктов предлагает современные технологии и инновационные решения.',
                'short_description_de' => 'Die neue Produktlinie bietet moderne Technologien und innovative Lösungen.',
                'short_description_fr' => 'La nouvelle gamme de produits propose des technologies modernes et des solutions innovantes.',
                'short_description_es' => 'La nueva línea de productos ofrece tecnologías modernas y soluciones innovadoras.',
                'short_description_zh' => '全新产品线提供现代技术与创新解决方案。',

                'content_az' => 'BAMoONE yeni məhsul xətti ilə bazarda innovativ həllər təqdim edir. Bu məhsullar həm təhlükəsizlik, həm də rahatlıq baxımından yüksək standartlara cavab verir.',
                'content_en' => 'With its new product line, BAMoONE brings innovative solutions to the market, meeting high standards of security and comfort.',
                'content_ru' => 'С новой линейкой продуктов BAMoONE предлагает инновационные решения, отвечающие высоким стандартам безопасности и комфорта.',
                'content_de' => 'Mit der neuen Produktlinie bietet BAMoONE innovative Lösungen, die hohe Sicherheits- und Komfortstandards erfüllen.',
                'content_fr' => 'Avec sa nouvelle gamme de produits, BAMoONE propose des solutions innovantes répondant à des normes élevées de sécurité et de confort.',
                'content_es' => 'Con su nueva línea de productos, BAMoONE ofrece soluciones innovadoras con altos estándares de seguridad y confort.',
                'content_zh' => 'BAMoONE 通过全新产品线为市场带来创新解决方案，满足高安全与舒适标准。',

                'main_image' => 'news/demo/news-1.jpg',
                'published_at' => now()->subDays(3),
            ],

            /* =========================
             | PRESS
             ========================= */
            [
                'category' => 'press',
                'is_featured' => false,

                'title_az' => 'BAMoONE mətbuat üçün rəsmi açıqlama yaydı',
                'title_en' => 'BAMoONE Issued an Official Press Release',
                'title_ru' => 'BAMoONE опубликовала официальное заявление',
                'title_de' => 'BAMoONE veröffentlichte eine offizielle Pressemitteilung',
                'title_fr' => 'BAMoONE a publié un communiqué officiel',
                'title_es' => 'BAMoONE emitió un comunicado oficial',
                'title_zh' => 'BAMoONE 发布了官方新闻稿',

                'short_description_az' => 'Şirkətin strateji planları və inkişaf istiqamətləri haqqında rəsmi açıqlama.',
                'short_description_en' => 'An official statement about the company’s strategic plans and future development.',
                'short_description_ru' => 'Официальное заявление о стратегических планах и развитии компании.',
                'short_description_de' => 'Eine offizielle Erklärung zu den strategischen Plänen und der Entwicklung des Unternehmens.',
                'short_description_fr' => 'Une déclaration officielle sur les plans stratégiques et le développement de l’entreprise.',
                'short_description_es' => 'Una declaración oficial sobre los planes estratégicos y el desarrollo de la empresa.',
                'short_description_zh' => '关于公司战略规划和发展的官方声明。',

                'content_az' => 'Bu açıqlamada BAMoONE-un gələcək inkişaf planları, tərəfdaşlıqlar və yeni layihələr barədə məlumat verilir.',
                'content_en' => 'This press release outlines BAMoONE’s future development plans, partnerships, and upcoming projects.',
                'content_ru' => 'В данном заявлении описаны планы развития BAMoONE, партнёрства и будущие проекты.',
                'content_de' => 'Diese Pressemitteilung beschreibt die zukünftigen Entwicklungspläne, Partnerschaften und Projekte von BAMoONE.',
                'content_fr' => 'Ce communiqué présente les plans de développement, les partenariats et les projets futurs de BAMoONE.',
                'content_es' => 'Este comunicado describe los planes de desarrollo, asociaciones y proyectos futuros de BAMoONE.',
                'content_zh' => '该新闻稿介绍了 BAMoONE 的未来发展计划、合作伙伴关系和新项目。',

                'main_image' => 'news/demo/press-1.jpg',
                'published_at' => now()->subDays(7),
            ],

            /* =========================
             | EVENT
             ========================= */
            [
                'category' => 'events',
                'is_featured' => true,

                'title_az' => 'BAMoONE beynəlxalq sərgidə iştirak etdi',
                'title_en' => 'BAMoONE Participated in an International Exhibition',
                'title_ru' => 'BAMoONE приняла участие в международной выставке',
                'title_de' => 'BAMoONE nahm an einer internationalen Messe teil',
                'title_fr' => 'BAMoONE a participé à une exposition internationale',
                'title_es' => 'BAMoONE participó en una exposición internacional',
                'title_zh' => 'BAMoONE 参加了国际展览',

                'short_description_az' => 'Şirkət öz yenilikçi həllərini beynəlxalq auditoriyaya təqdim etdi.',
                'short_description_en' => 'The company showcased its innovative solutions to an international audience.',
                'short_description_ru' => 'Компания представила свои инновационные решения международной аудитории.',
                'short_description_de' => 'Das Unternehmen präsentierte seine innovativen Lösungen einem internationalen Publikum.',
                'short_description_fr' => 'L’entreprise a présenté ses solutions innovantes à un public international.',
                'short_description_es' => 'La empresa presentó sus soluciones innovadoras a una audiencia internacional.',
                'short_description_zh' => '公司向国际观众展示了其创新解决方案。',

                'content_az' => 'Tədbir çərçivəsində BAMoONE-un yeni texnologiyaları və məhsulları nümayiş etdirildi.',
                'content_en' => 'During the event, BAMoONE showcased its latest technologies and products.',
                'content_ru' => 'В рамках мероприятия BAMoONE продемонстрировала свои новые технологии и продукты.',
                'content_de' => 'Im Rahmen der Veranstaltung präsentierte BAMoONE seine neuesten Technologien und Produkte.',
                'content_fr' => 'Lors de l’événement, BAMoONE a présenté ses dernières technologies et produits.',
                'content_es' => 'Durante el evento, BAMoONE presentó sus últimas tecnologías y productos.',
                'content_zh' => '在活动期间，BAMoONE 展示了其最新技术和产品。',

                'event_date' => now()->addDays(10)->toDateString(),
                'event_location' => 'Baku, Azerbaijan',

                'main_image' => 'news/demo/event-1.jpg',
                'published_at' => now(),
            ],
        ];

        foreach ($items as $item) {
            $item['slug'] = Str::slug($item['title_en']) . '-' . uniqid();
            $item['is_active'] = true;

            News::create($item);
        }
    }
}
