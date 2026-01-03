<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Announcement;
use Illuminate\Support\Str;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            /* ===============================
             | OVERVIEW
             =============================== */
            [
                'type' => 'overview',

                'title_az' => 'Elanlar və Kampaniyalar – Ümumi Baxış',
                'title_en' => 'Announcements & Campaigns – Overview',
                'title_ru' => 'Объявления и кампании – Обзор',
                'title_de' => 'Ankündigungen & Kampagnen – Überblick',
                'title_fr' => 'Annonces et campagnes – Aperçu',
                'title_es' => 'Anuncios y campañas – Resumen',
                'title_zh' => '公告与活动 – 概览',

                'intro_az' => 'Bu bölmədə BAMoONE brendinə aid bütün elanlar və kampaniyalar təqdim olunur.',
                'intro_en' => 'This section presents all announcements and campaigns related to the BAMoONE brand.',
                'intro_ru' => 'В этом разделе представлены все объявления и кампании бренда BAMoONE.',
                'intro_de' => 'In diesem Bereich werden alle Ankündigungen und Kampagnen der Marke BAMoONE vorgestellt.',
                'intro_fr' => 'Cette section présente toutes les annonces et campagnes liées à la marque BAMoONE.',
                'intro_es' => 'Esta sección presenta todos los anuncios y campañas relacionados con la marca BAMoONE.',
                'intro_zh' => '本部分展示与 BAMoONE 品牌相关的所有公告和活动。',

                'content_az' => 'İstifadəçilər bu səhifə vasitəsilə həm cari, həm də əvvəlki kampaniyalarla tanış ola bilərlər.',
                'content_en' => 'Users can explore both current and previous campaigns through this page.',
                'content_ru' => 'Пользователи могут ознакомиться как с текущими, так и с прошлыми кампаниями.',
                'content_de' => 'Benutzer können über diese Seite sowohl aktuelle als auch frühere Kampagnen einsehen.',
                'content_fr' => 'Les utilisateurs peuvent consulter les campagnes actuelles et passées via cette page.',
                'content_es' => 'Los usuarios pueden explorar campañas actuales y anteriores a través de esta página.',
                'content_zh' => '用户可以通过此页面查看当前和过往的活动。',

                'main_image' => 'announcements/demo/overview.jpg',
                'published_at' => now(),
            ],

            /* ===============================
             | ANNOUNCEMENT
             =============================== */
            [
                'type' => 'announcement',

                'title_az' => 'Yeni xidmətlərimiz istifadəyə verildi',
                'title_en' => 'Our New Services Are Now Available',
                'title_ru' => 'Наши новые услуги уже доступны',
                'title_de' => 'Unsere neuen Dienstleistungen sind jetzt verfügbar',
                'title_fr' => 'Nos nouveaux services sont désormais disponibles',
                'title_es' => 'Nuestros nuevos servicios ya están disponibles',
                'title_zh' => '我们的新服务现已上线',

                'intro_az' => 'BAMoONE istifadəçiləri üçün yeni funksiyalar və xidmətlər təqdim edir.',
                'intro_en' => 'BAMoONE introduces new features and services for its users.',
                'intro_ru' => 'BAMoONE представляет новые функции и услуги для пользователей.',
                'intro_de' => 'BAMoONE stellt neue Funktionen und Dienstleistungen für Benutzer vor.',
                'intro_fr' => 'BAMoONE introduit de nouvelles fonctionnalités et services pour ses utilisateurs.',
                'intro_es' => 'BAMoONE presenta nuevas funciones y servicios para sus usuarios.',
                'intro_zh' => 'BAMoONE 为用户推出了新功能和服务。',

                'content_az' => 'Bu elan çərçivəsində istifadəçilərə təqdim olunan yeniliklər ətraflı şəkildə izah edilir.',
                'content_en' => 'This announcement explains in detail the new updates provided to users.',
                'content_ru' => 'В данном объявлении подробно описаны обновления для пользователей.',
                'content_de' => 'Diese Ankündigung erläutert die neuen Updates für Benutzer im Detail.',
                'content_fr' => 'Cette annonce explique en détail les nouvelles mises à jour pour les utilisateurs.',
                'content_es' => 'Este anuncio explica en detalle las nuevas actualizaciones para los usuarios.',
                'content_zh' => '本公告详细介绍了为用户提供的新更新。',

                'main_image' => 'announcements/demo/announcement.jpg',
                'published_at' => now()->subDays(3),
            ],

            /* ===============================
             | CAMPAIGN
             =============================== */
            [
                'type' => 'campaign',

                'title_az' => 'Yay Endirim Kampaniyası',
                'title_en' => 'Summer Discount Campaign',
                'title_ru' => 'Летняя кампания скидок',
                'title_de' => 'Sommer-Rabattkampagne',
                'title_fr' => 'Campagne de réduction estivale',
                'title_es' => 'Campaña de descuentos de verano',
                'title_zh' => '夏季折扣活动',

                'intro_az' => 'Məhdud zaman üçün xüsusi endirimlər və kampaniya təklifləri.',
                'intro_en' => 'Limited-time special discounts and campaign offers.',
                'intro_ru' => 'Специальные скидки и предложения на ограниченное время.',
                'intro_de' => 'Zeitlich begrenzte Sonderrabatte und Kampagnenangebote.',
                'intro_fr' => 'Réductions spéciales et offres promotionnelles à durée limitée.',
                'intro_es' => 'Descuentos especiales y ofertas por tiempo limitado.',
                'intro_zh' => '限时特别折扣和促销优惠。',

                'content_az' => 'Bu kampaniya çərçivəsində seçilmiş məhsullara xüsusi qiymətlər tətbiq olunur.',
                'content_en' => 'Special prices are applied to selected products as part of this campaign.',
                'content_ru' => 'В рамках кампании на выбранные продукты действуют специальные цены.',
                'content_de' => 'Im Rahmen dieser Kampagne gelten Sonderpreise für ausgewählte Produkte.',
                'content_fr' => 'Des prix spéciaux sont appliqués aux produits sélectionnés dans le cadre de cette campagne.',
                'content_es' => 'Se aplican precios especiales a productos seleccionados dentro de esta campaña.',
                'content_zh' => '本次活动对精选产品提供特别价格。',

                'start_date' => now()->subDays(2),
                'end_date' => now()->addDays(15),

                'main_image' => 'announcements/demo/campaign.jpg',
                'published_at' => now()->subDay(),
            ],
        ];

        foreach ($items as $item) {
            $item['slug'] = Str::slug($item['title_en']) . '-' . uniqid();
            $item['is_active'] = true;
            $item['sort_order'] = 0;

            Announcement::create($item);
        }
    }
}
