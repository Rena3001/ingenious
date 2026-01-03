<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicePackage;
use App\Models\ServicePackageSection;

class ServicePackageSeeder extends Seeder
{
    public function run(): void
    {
        ServicePackage::query()->delete();

        $section = ServicePackageSection::first();
        if (!$section) return;

        // ================= BASIC — 77 =================
        ServicePackage::create([
            'service_package_section_id' => $section->id,
            'package_key' => 'basic',
            'price' => 39,
            'price_unit' => 'hr',
            'icon' => 'icon-speedometer',
            'sort_order' => 1,

            'title_az' => 'Əsas Paket',
            'title_en' => 'Basic Package',
            'title_ru' => 'Базовый пакет',
            'title_de' => 'Basispaket',
            'title_es' => 'Paquete Básico',
            'title_fr' => 'Forfait Basique',
            'title_zh' => '基础套餐',

            'description_main_az' => 'Sadə texniki yönləndirmə + standart cavab müddəti.',
            'description_main_en' => 'Basic technical guidance + standard response time.',
            'description_main_ru' => 'Базовое техническое сопровождение + стандартное время ответа.',
            'description_main_de' => 'Grundlegende technische Anleitung + Standard-Antwortzeit.',
            'description_main_es' => 'Orientación técnica básica + tiempo de respuesta estándar.',
            'description_main_fr' => 'Assistance technique de base + délai de réponse standard.',
            'description_main_zh' => '基础技术指导 + 标准响应时间。',

            'description_detail_az' => 'İstifadəçilərə əsas yazılı izahlar və problem həlli üzrə yönləndirmə təqdim olunur.',
            'description_detail_en' => 'Users receive essential written instructions and troubleshooting support.',
            'description_detail_ru' => 'Пользователи получают письменные инструкции и помощь по устранению проблем.',
            'description_detail_de' => 'Benutzer erhalten schriftliche Anleitungen und Unterstützung bei der Fehlerbehebung.',
            'description_detail_es' => 'Los usuarios reciben instrucciones escritas y soporte para la resolución de problemas.',
            'description_detail_fr' => 'Les utilisateurs reçoivent des instructions écrites et une aide au dépannage.',
            'description_detail_zh' => '用户将获得书面说明和故障排除支持。',

            'remote_note_az' => 'Bütün xidmətlər məsafədən göstərilir.',
            'remote_note_en' => 'All services are provided remotely.',
            'remote_note_ru' => 'Все услуги предоставляются удалённо.',
            'remote_note_de' => 'Alle Dienste werden remote bereitgestellt.',
            'remote_note_es' => 'Todos los servicios se brindan de forma remota.',
            'remote_note_fr' => 'Tous les services sont fournis à distance.',
            'remote_note_zh' => '所有服务均通过远程方式提供。',

            'is_active' => true,
        ]);

        // ================= PRIORITY — 78 =================
        ServicePackage::create([
            'service_package_section_id' => $section->id,
            'package_key' => 'priority',
            'price' => 99,
            'price_unit' => 'hr',
            'icon' => 'icon-trophy',
            'sort_order' => 2,
            'is_featured' => true,

            'title_az' => 'Üstün Paket',
            'title_en' => 'Priority Package',
            'title_ru' => 'Приоритетный пакет',
            'title_de' => 'Prioritätspaket',
            'title_es' => 'Paquete Prioritario',
            'title_fr' => 'Forfait Prioritaire',
            'title_zh' => '优先套餐',

            'description_main_az' => 'Daha sürətli cavab + mütəxəssis analizi + addım-addım quraşdırma izahı.',
            'description_main_en' => 'Faster response + expert analysis + step-by-step setup guidance.',
            'description_main_ru' => 'Быстрый ответ + экспертный анализ + пошаговая установка.',
            'description_main_de' => 'Schnellere Antwort + Expertenanalyse + Schritt-für-Schritt-Anleitung.',
            'description_main_es' => 'Respuesta más rápida + análisis experto + guía paso a paso.',
            'description_main_fr' => 'Réponse rapide + analyse experte + guide étape par étape.',
            'description_main_zh' => '更快响应 + 专家分析 + 分步安装指导。',

            'description_detail_az' => 'Problemlər prioritet qaydada nəzərdən keçirilir və səsli/video izahlar təqdim olunur.',
            'description_detail_en' => 'Issues are reviewed with priority using voice and video explanations.',
            'description_detail_ru' => 'Проблемы рассматриваются в приоритетном порядке с голосовыми и видеоинструкциями.',
            'description_detail_de' => 'Probleme werden priorisiert mit Sprach- und Videoerklärungen behandelt.',
            'description_detail_es' => 'Los problemas se revisan con prioridad mediante explicaciones de voz y video.',
            'description_detail_fr' => 'Les problèmes sont traités en priorité avec des explications audio et vidéo.',
            'description_detail_zh' => '问题将优先处理，并提供语音和视频说明。',

            'remote_note_az' => 'Bütün xidmətlər məsafədən göstərilir.',
            'remote_note_en' => 'All services are provided remotely.',
            'remote_note_ru' => 'Все услуги предоставляются удалённо.',
            'remote_note_de' => 'Alle Dienste werden remote erbracht.',
            'remote_note_es' => 'Todos los servicios se prestan de forma remota.',
            'remote_note_fr' => 'Tous les services sont fournis à distance.',
            'remote_note_zh' => '所有服务均远程提供。',

            'is_active' => true,
        ]);

        // ================= PREMIUM — 79 =================
        ServicePackage::create([
            'service_package_section_id' => $section->id,
            'package_key' => 'premium',
            'price' => 79,
            'price_unit' => 'hr',
            'icon' => 'icon-shield',
            'sort_order' => 3,

            'title_az' => 'Premium Paket',
            'title_en' => 'Premium Package',
            'title_ru' => 'Премиум пакет',
            'title_de' => 'Premium-Paket',
            'title_es' => 'Paquete Premium',
            'title_fr' => 'Forfait Premium',
            'title_zh' => '高级套餐',

            'description_main_az' => 'VIP cavab + uzaqdan quraşdırma dəstəyi + geniş problem həlli.',
            'description_main_en' => 'VIP response + remote installation support + advanced troubleshooting.',
            'description_main_ru' => 'VIP-ответ + удалённая установка + расширенное устранение проблем.',
            'description_main_de' => 'VIP-Antwort + Remote-Installation + erweiterte Fehlerbehebung.',
            'description_main_es' => 'Respuesta VIP + instalación remota + solución avanzada de problemas.',
            'description_main_fr' => 'Réponse VIP + installation à distance + dépannage avancé.',
            'description_main_zh' => 'VIP 响应 + 远程安装支持 + 高级故障排除。',

            'description_detail_az' => 'Video call vasitəsilə fərdi və prioritet dəstək təqdim edilir.',
            'description_detail_en' => 'Personalized and priority support via detailed video calls.',
            'description_detail_ru' => 'Индивидуальная приоритетная поддержка через видеосвязь.',
            'description_detail_de' => 'Personalisierter Prioritätssupport per Videoanruf.',
            'description_detail_es' => 'Soporte personalizado y prioritario mediante videollamadas.',
            'description_detail_fr' => 'Assistance personnalisée et prioritaire via appel vidéo.',
            'description_detail_zh' => '通过视频通话提供个性化和优先支持。',

            'remote_note_az' => 'Bütün xidmətlər məsafədən göstərilir.',
            'remote_note_en' => 'All services are provided remotely.',
            'remote_note_ru' => 'Все услуги предоставляются удалённо.',
            'remote_note_de' => 'Alle Dienste werden remote erbracht.',
            'remote_note_es' => 'Todos los servicios se prestan de forma remota.',
            'remote_note_fr' => 'Tous les services sont fournis à distance.',
            'remote_note_zh' => '所有服务均远程提供。',

            'is_active' => true,
        ]);
    }
}
