<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicePackageSection;

class ServicePackageSectionSeeder extends Seeder
{
    public function run(): void
    {
        ServicePackageSection::query()->delete();

        ServicePackageSection::create([
            // ===== TITLE — 76 =====
            'title_az' => 'Xidmət Paketləri',
            'title_en' => 'Service Packages',
            'title_ru' => 'Сервисные пакеты',
            'title_de' => 'Servicepakete',
            'title_es' => 'Paquetes de servicio',
            'title_fr' => 'Forfaits de service',
            'title_zh' => '服务套餐',

            // ===== SUBTITLE — 76.1 =====
            'subtitle_az' => 'Tezliklə — Bu xidmət paketləri yaxın zamanda aktiv ediləcək.',
            'subtitle_en' => 'Coming Soon — These service plans will be activated in the near future.',
            'subtitle_ru' => 'Скоро — Эти сервисные планы будут активированы в ближайшее время.',
            'subtitle_de' => 'Demnächst — Diese Servicepläne werden in naher Zukunft aktiviert.',
            'subtitle_es' => 'Próximamente — Estos planes de servicio se activarán pronto.',
            'subtitle_fr' => 'Bientôt — Ces forfaits de service seront activés prochainement.',
            'subtitle_zh' => '即将推出 — 这些服务套餐将在不久的将来启用。',

            // ===== NOTE — 76.2 / 76.3 =====
            'note_az' => 'Bu xidmət paketləri zəmanət müddəti bitmiş müştərilər üçün nəzərdə tutulub. BAMoONE məhsullarından istifadə etməyə davam edən və əlavə texniki dəstəyə ehtiyac duyan istifadəçilər bu paketlərdən yararlana biləcək.',
            'note_en' => 'These service packages are intended for customers whose warranty period has expired. Users who continue using BAMoONE products and require additional technical assistance will be able to benefit from these plans.',
            'note_ru' => 'Эти сервисные пакеты предназначены для клиентов, у которых истёк гарантийный срок. Пользователи, продолжающие использовать продукцию BAMoONE и нуждающиеся в дополнительной технической поддержке, смогут воспользоваться этими пакетами.',
            'note_de' => 'Diese Servicepakete sind für Kunden vorgesehen, deren Garantiezeit abgelaufen ist. Nutzer, die BAMoONE-Produkte weiterhin verwenden und zusätzliche technische Unterstützung benötigen, können diese Pakete nutzen.',
            'note_es' => 'Estos paquetes de servicio están destinados a clientes cuyo período de garantía ha expirado. Los usuarios que continúan utilizando productos BAMoONE y necesitan asistencia técnica adicional podrán beneficiarse de estos planes.',
            'note_fr' => 'Ces forfaits de service sont destinés aux clients dont la période de garantie est expirée. Les utilisateurs qui continuent d’utiliser les produits BAMoONE et nécessitent une assistance technique supplémentaire pourront en bénéficier.',
            'note_zh' => '这些服务套餐适用于保修期已过的客户。继续使用 BAMoONE 产品并需要额外技术支持的用户可使用这些套餐。',

            // ===== REMOTE NOTE — 76.5 =====
            'remote_note_az' => 'Bu xidmətlərin hamısı tamamilə məsafədən (remote) göstərilir. Xahiş edirik nəzərə alasınız.',
            'remote_note_en' => 'All services are provided fully remotely. Please keep this in mind.',
            'remote_note_ru' => 'Все услуги предоставляются полностью удалённо. Пожалуйста, учитывайте это.',
            'remote_note_de' => 'Alle Dienstleistungen werden vollständig remote erbracht. Bitte beachten Sie dies.',
            'remote_note_es' => 'Todos los servicios se prestan completamente de forma remota. Por favor, téngalo en cuenta.',
            'remote_note_fr' => 'Tous les services sont fournis entièrement à distance. Veuillez en tenir compte.',
            'remote_note_zh' => '所有服务均完全远程提供。请注意这一点。',

            'is_active' => true,
        ]);
    }
}
