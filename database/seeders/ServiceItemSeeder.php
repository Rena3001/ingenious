<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceItem;

class ServiceItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            [
                'icon' => 'flaticon-smartphone-4',
                'image' => 'services/service-4.jpg',
                'sort_order' => 1,
                'is_active' => true,
                'button_link' => '#',

                'title_az' => 'Mobil tətbiq və veb interfeys',
                'title_en' => 'Apps & Web Interface',
                'title_ru' => 'Мобильные и веб приложения',
                'title_de' => 'Apps & Web-Schnittstelle',
                'title_fr' => 'Applications et interface web',
                'title_es' => 'Aplicaciones y interfaz web',
                'title_zh' => '应用程序和网络界面',

                'description_az' =>
                    'İstənilən cihazdan rahat idarəetmə imkanı.',
                'description_en' =>
                    'Easy control from any device.',
                'description_ru' =>
                    'Удобное управление с любого устройства.',
                'description_de' =>
                    'Einfache Steuerung von jedem Gerät aus.',
                'description_fr' =>
                    'Contrôle facile depuis n\'importe quel appareil.',
                'description_es' =>
                    'Fácil control desde cualquier dispositivo.',
                'description_zh' =>
                    '可从任何设备轻松控制。',

                'overlay_az' =>
                    'Mobil və veb üzərindən tam nəzarət.',
                'overlay_en' =>
                    'Full mobile and web-based control.',
                'overlay_ru' =>
                    'Полный контроль через мобильные и веб приложения.',
                'overlay_de' =>
                    'Vollständige mobile und webbasierte Steuerung.',
                'overlay_fr' =>
                    'Contrôle mobile et web complet.',
                'overlay_es' =>
                    'Control móvil y web completo.',
                'overlay_zh' =>
                    '完整的移动和基于网络的控制.',
            ],
            [
                'icon' => 'flaticon-refresh',
                'image' => 'services/service-5.jpg',
                'sort_order' => 2,
                'is_active' => true,
                'button_link' => '#',

                'title_az' => 'Pulsuz yeniləmələr',
                'title_en' => 'Free Updates',
                'title_ru' => 'Бесплатные обновления',
                'title_de' => 'Kostenlose Updates',
                'title_fr' => 'Mises à jour gratuites',
                'title_es' => 'Actualizaciones gratuitas',
                'title_zh' => '免费更新',

                'description_az' =>
                    'Sistem daim yenilənir və təkmilləşdirilir.',
                'description_en' =>
                    'System is constantly updated and improved.',
                'description_ru' =>
                    'Система постоянно обновляется.',
                'description_de' =>
                    'Das System wird ständig aktualisiert und verbessert.',
                'description_fr' =>
                    'Le système est constamment mis à jour et amélioré.',
                'description_es' =>
                    'El sistema se actualiza y mejora constantemente.',
                'description_zh' =>
                    '系统不断更新和改进。',

                'overlay_az' =>
                    'Əlavə ödənişsiz yeniləmələr.',
                'overlay_en' =>
                    'Updates without extra cost.',
                'overlay_ru' =>
                    'Обновления без дополнительной платы.',
                'overlay_de' =>
                    'Updates ohne zusätzliche Kosten.',
                'overlay_fr' =>
                    'Mises à jour sans frais supplémentaires.',
                'overlay_es' =>
                    'Actualizaciones sin costo adicional.',
                'overlay_zh' =>
                    '无需额外费用的更新。',
            ],
            [
                'icon' => 'flaticon-compass-1',
                'image' => 'services/service-6.jpg',
                'sort_order' => 3,
                'is_active' => true,
                'button_link' => '#',

                'title_az' => 'Ağıllı konfiqurasiyalar',
                'title_en' => 'Ingenious Configurations',
                'title_ru' => 'Умные конфигурации',
                'title_de' => 'Intelligente Konfigurationen',
                'title_fr' => 'Configurations intelligentes',
                'title_es' => 'Configuraciones ingeniosas',
                'title_zh' => '智能配置',

                'description_az' =>
                    'Fərdi ehtiyaclara uyğun ağıllı ayarlar.',
                'description_en' =>
                    'Smart configurations tailored to your needs.',
                'description_ru' =>
                    'Умные настройки под ваши нужды.',
                'description_de' =>
                    'Intelligente Einstellungen, die auf Ihre Bedürfnisse zugeschnitten sind.',
                'description_fr' =>
                    'Des configurations intelligentes adaptées à vos besoins.',
                'description_es' =>
                    'Configuraciones inteligentes adaptadas a sus necesidades.',
                'description_zh' =>
                    '根据您的需求量身定制的智能配置。',

                'overlay_az' =>
                    'Sürətli və çevik konfiqurasiya.',
                'overlay_en' =>
                    'Fast and flexible configuration.',
                'overlay_ru' =>
                    'Быстрая и гибкая настройка.',
                'overlay_de' =>
                    'Schnelle und flexible Konfiguration.',
                'overlay_fr' =>
                    'Configuration rapide et flexible.',
                'overlay_es' =>
                    'Configuración rápida y flexible.',
                'overlay_zh' =>
                    '快速灵活的配置。'
                
            ],
        ];

        foreach ($items as $item) {
            ServiceItem::create($item);
        }
    }
}
