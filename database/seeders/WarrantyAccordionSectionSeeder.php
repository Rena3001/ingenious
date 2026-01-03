<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\WarrantyAccordionSection;
use App\Models\WarrantyAccordionItem;

class WarrantyAccordionSectionSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        WarrantyAccordionItem::truncate();
        WarrantyAccordionSection::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        /* ===============================
           ACCORDION SECTION (19–20)
        =============================== */
        $section = WarrantyAccordionSection::create([
            'background_image' => 'warranty/accordion/repair-bg.jpg',

            // TITLE (20)
            'title_az' => 'Təmir və Əvəzləmə Müraciətləri',
            'title_en' => 'Repair & Replacement Requests',
            'title_ru' => 'Запросы на ремонт и замену',
            'title_de' => 'Reparatur- und Austauschservice',
            'title_fr' => 'Demandes de réparation et de remplacement',
            'title_es' => 'Solicitudes de reparación y reemplazo',
            'title_zh' => '维修与更换申请',

            // CTA EMAIL (25)
            'cta_email' => 'support@bamoone.com',

            'is_active' => true,
        ]);

        /* ===============================
           ACCORDION ITEMS (21–24)
        =============================== */

        // 21 — Repair & Replacement Policy
        WarrantyAccordionItem::create([
            'accordion_section_id' => $section->id,

            'title_az' => 'Zəmanət Çərçivəsində Təmir və Əvəzləmə',
            'title_en' => 'Warranty Repair & Replacement Policy',
            'title_ru' => 'Гарантийный ремонт и замена',
            'title_de' => 'Garantie-Reparatur und Austausch',
            'title_fr' => 'Réparation et remplacement sous garantie',
            'title_es' => 'Reparación y reemplazo bajo garantía',
            'title_zh' => '保修维修与更换政策',

            'content_az' => 'Bizdən aldığınız məhsullar normal istifadə zamanı daxili texniki nasazlıqlara görə zəmanət çərçivəsində təmir və ya əvəzlənə bilər. Səhv istifadə və xarici zərbələr zəmanətə daxil deyil.',
            'content_en' => 'Products damaged due to internal technical failure during normal use are covered by warranty. Damage caused by misuse or external impact is not covered.',
            'content_ru' => 'Повреждения из-за внутренних технических неисправностей покрываются гарантией. Неправильное использование не входит в гарантию.',
            'content_de' => 'Schäden durch interne technische Fehler sind durch die Garantie abgedeckt. Fehlbedienung ist ausgeschlossen.',
            'content_fr' => 'Les pannes internes sont couvertes par la garantie. Les dommages dus à une mauvaise utilisation ne sont pas couverts.',
            'content_es' => 'Las fallas internas están cubiertas por la garantía. El mal uso no está cubierto.',
            'content_zh' => '正常使用中因内部故障造成的损坏在保修范围内。人为或外部损坏不在保修范围内。',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        // 21.1 — Before You Submit a Claim
        WarrantyAccordionItem::create([
            'accordion_section_id' => $section->id,

            'title_az' => 'Müraciət Etməzdən Əvvəl',
            'title_en' => 'Before You Submit a Claim',
            'title_ru' => 'Перед подачей заявки',
            'title_de' => 'Vor der Antragstellung',
            'title_fr' => 'Avant de soumettre une demande',
            'title_es' => 'Antes de enviar una solicitud',
            'title_zh' => '提交申请前须知',

            'content_az' => 'Daha sürətli və effektiv dəstək üçün müraciət etməzdən əvvəl tələb olunan məlumat və materialları hazırlayın.',
            'content_en' => 'To help us provide faster and more effective support, please review the required information before submitting your request.',
            'content_ru' => 'Для более быстрого обслуживания подготовьте необходимую информацию заранее.',
            'content_de' => 'Bitte bereiten Sie alle erforderlichen Informationen vor.',
            'content_fr' => 'Veuillez préparer les informations nécessaires avant de soumettre votre demande.',
            'content_es' => 'Prepare la información requerida antes de enviar su solicitud.',
            'content_zh' => '请在提交申请前准备好所需的信息，以便我们更快地为您提供支持。',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        // 22 — Take 3 Photos
        WarrantyAccordionItem::create([
            'accordion_section_id' => $section->id,

            'title_az' => '3 Aydın Foto Çəkin',
            'title_en' => 'Take 3 Clear Photos',
            'title_ru' => 'Сделайте 3 чётких фото',
            'title_de' => '3 klare Fotos aufnehmen',
            'title_fr' => 'Prenez 3 photos claires',
            'title_es' => 'Tome 3 fotos claras',
            'title_zh' => '拍摄三张清晰照片',

            'content_az' => 'Məhsulu üç fərqli bucaqdan çəkin və zədələnmiş hissəni aydın şəkildə göstərin.',
            'content_en' => 'Take three clear photos from different angles, clearly showing the damaged area.',
            'content_ru' => 'Сделайте фото с разных ракурсов, показывая повреждённую часть.',
            'content_de' => 'Machen Sie Fotos aus verschiedenen Winkeln.',
            'content_fr' => 'Prenez des photos sous différents angles.',
            'content_es' => 'Tome fotos desde diferentes ángulos.',
            'content_zh' => '从不同角度拍摄清晰的照片，展示受损部位。',

            'sort_order' => 3,
            'is_active' => true,
        ]);

        // 23–24 — Video + Submit
        WarrantyAccordionItem::create([
            'accordion_section_id' => $section->id,

            'title_az' => 'Qısa Video və İzah Göndərin',
            'title_en' => 'Submit Photos, Video & Description',
            'title_ru' => 'Отправьте фото, видео и описание',
            'title_de' => 'Fotos, Video und Beschreibung senden',
            'title_fr' => 'Envoyer photos, vidéo et description',
            'title_es' => 'Enviar fotos, video y descripción',
            'title_zh' => '提交照片、视频和说明',

            'content_az' => 'Təxminən 60 saniyəlik video və qısa izahla birlikdə bütün materialları bizə göndərin.',
            'content_en' => 'Send the photos and a short video (≈60s) along with a brief description to help us provide the correct solution.',
            'content_ru' => 'Отправьте короткое видео и описание проблемы.',
            'content_de' => 'Senden Sie ein kurzes Video und eine Beschreibung.',
            'content_fr' => 'Envoyez une courte vidéo avec une description.',
            'content_es' => 'Envíe un video corto con una descripción.',
            'content_zh' => '提交约60秒的视频和简要说明，以便我们提供合适的解决方案。',

            'sort_order' => 4,
            'is_active' => true,
        ]);
    }
}
