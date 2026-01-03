<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\WarrantyFeatureSection;
use App\Models\WarrantyFeatureItem;

class WarrantyFeatureSectionSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        WarrantyFeatureItem::truncate();
        WarrantyFeatureSection::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        /* ===============================
           FEATURE SECTION (13–14)
        =============================== */
        $section = WarrantyFeatureSection::create([
            'background_image' => 'warranty/features/service-bg.jpg',

            // TITLE
            'title_az' => 'Zəmanət və Texniki Xidmətlər',
            'title_en' => 'Warranty & Technical Services',
            'title_ru' => 'Гарантия и техническое обслуживание',
            'title_de' => 'Garantie- und technische Services',
            'title_fr' => 'Garantie et services techniques',
            'title_es' => 'Garantía y servicios técnicos',
            'title_zh' => '保修与技术服务',

            // DESCRIPTION (14.1)
            'description_az' => 'Məsafədən quraşdırma dəstəyi, video təlimatlar və texniki sənədlərlə sürətli və effektiv xidmət.',
            'description_en' => 'Fast and accurate remote installation support, video guides, and technical documentation.',
            'description_ru' => 'Быстрая удалённая установка, видеоинструкции и техническая документация.',
            'description_de' => 'Schneller Remote-Installationssupport, Videoanleitungen und technische Dokumentation.',
            'description_fr' => 'Support d’installation à distance rapide, guides vidéo et documentation technique.',
            'description_es' => 'Soporte de instalación remota rápido, guías en video y documentación técnica.',
            'description_zh' => '快速的远程安装支持、视频指南和技术文档。',

            // CTA (18)
            'button_link' => '/technical-services',

            'is_active' => true,
        ]);

        /* ===============================
           FEATURE ITEMS (14–17)
        =============================== */

        // 14 — Remote Installation Support
        WarrantyFeatureItem::create([
            'feature_section_id' => $section->id,
            'icon' => 'fa fa-headset',

            'title_az' => 'Məsafədən Quraşdırma və Texniki Dəstək',
            'title_en' => 'Remote Installation Support & Troubleshooting',
            'title_ru' => 'Удалённая установка и устранение неисправностей',
            'title_de' => 'Remote-Installation & Fehlerbehebung',
            'title_fr' => 'Installation à distance et dépannage',
            'title_es' => 'Instalación remota y solución de problemas',
            'title_zh' => '远程安装与故障排除',

            'text_az' => 'Sürətli və dəqiq məsafədən quraşdırma yönləndirməsi, texniki problemlərin tam onlayn diaqnostikası və həlli.',
            'text_en' => 'Fast and accurate remote installation guidance, with technical issues diagnosed and resolved entirely online.',
            'text_ru' => 'Быстрое удалённое руководство по установке с полной онлайн-диагностикой и устранением проблем.',
            'text_de' => 'Schnelle Remote-Anleitung mit vollständiger Online-Diagnose und Fehlerbehebung.',
            'text_fr' => 'Guidage rapide à distance avec diagnostic et résolution complète en ligne.',
            'text_es' => 'Guía remota rápida con diagnóstico y resolución de problemas en línea.',
            'text_zh' => '快速远程安装指导，技术问题可完全在线诊断与解决。',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        // 15 — Step-by-Step Video Guidance
        WarrantyFeatureItem::create([
            'feature_section_id' => $section->id,
            'icon' => 'fa fa-video',

            'title_az' => 'Video ilə Addım-addım Dəstək',
            'title_en' => 'Step-by-Step Video Guidance',
            'title_ru' => 'Пошаговые видеоинструкции',
            'title_de' => 'Schritt-für-Schritt Videoanleitungen',
            'title_fr' => 'Guides vidéo étape par étape',
            'title_es' => 'Guías en video paso a paso',
            'title_zh' => '分步视频指导',

            'text_az' => 'Texniki komandamız tərəfindən hazırlanmış quraşdırma və problem-həlli videoları ilə prosesi asanlıqla tamamlayın.',
            'text_en' => 'Watch clear installation and troubleshooting videos prepared by our technical team and complete your setup easily.',
            'text_ru' => 'Смотрите понятные видеоинструкции по установке и устранению проблем.',
            'text_de' => 'Sehen Sie klare Installations- und Fehlerbehebungsvideos.',
            'text_fr' => 'Regardez des vidéos claires d’installation et de dépannage.',
            'text_es' => 'Vea videos claros de instalación y solución de problemas.',
            'text_zh' => '观看由技术团队准备的清晰安装和故障排除视频。',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        // 16 — Product Manuals & Guides
        WarrantyFeatureItem::create([
            'feature_section_id' => $section->id,
            'icon' => 'fa fa-book',

            'title_az' => 'Təlimat Kitabçaları və Bələdçilər',
            'title_en' => 'Product Manuals & Guides',
            'title_ru' => 'Руководства и инструкции',
            'title_de' => 'Produkt-Handbücher & Leitfäden',
            'title_fr' => 'Manuels et guides produits',
            'title_es' => 'Manuales y guías de producto',
            'title_zh' => '产品手册与指南',

            'text_az' => 'Bütün BAMoONE məhsulları üçün ətraflı təlimat kitabçalarını yükləyərək düzgün quraşdırma və istifadəni təmin edin.',
            'text_en' => 'Download detailed manuals for all BAMoONE products to ensure proper installation and usage.',
            'text_ru' => 'Скачайте подробные руководства для правильной установки и использования.',
            'text_de' => 'Laden Sie detaillierte Handbücher für eine korrekte Installation herunter.',
            'text_fr' => 'Téléchargez des manuels détaillés pour une utilisation correcte.',
            'text_es' => 'Descargue manuales detallados para una instalación correcta.',
            'text_zh' => '下载所有 BAMoONE 产品的详细手册以确保正确使用。',

            'sort_order' => 3,
            'is_active' => true,
        ]);

        // 17 — FAQ
        WarrantyFeatureItem::create([
            'feature_section_id' => $section->id,
            'icon' => 'fa fa-question-circle',

            'title_az' => 'Tez-tez Verilən Suallar (FAQ)',
            'title_en' => 'Frequently Asked Questions (FAQ)',
            'title_ru' => 'Часто задаваемые вопросы',
            'title_de' => 'Häufig gestellte Fragen (FAQ)',
            'title_fr' => 'Foire aux questions (FAQ)',
            'title_es' => 'Preguntas frecuentes (FAQ)',
            'title_zh' => '常见问题解答',

            'text_az' => 'Quraşdırma, istifadə, zəmanət və texniki dəstək barədə ən çox verilən sualların cavablarını tapın.',
            'text_en' => 'Find quick answers about installation, usage, warranty, and technical support.',
            'text_ru' => 'Найдите быстрые ответы по установке, гарантии и поддержке.',
            'text_de' => 'Finden Sie schnelle Antworten zu Installation und Support.',
            'text_fr' => 'Trouvez des réponses rapides sur l’installation et le support.',
            'text_es' => 'Encuentre respuestas rápidas sobre instalación y soporte.',
            'text_zh' => '快速查找有关安装、保修和技术支持的答案。',

            'sort_order' => 4,
            'is_active' => true,
        ]);
    }
}
