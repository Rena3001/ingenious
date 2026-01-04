<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SecurityFeature;

class SecurityFeatureSeeder extends Seeder
{
    public function run(): void
    {
        SecurityFeature::truncate();

        SecurityFeature::insert([

            /* ===================== 4. LOCKS ===================== */
            [
                'icon' => 'flaticon-lock',

                'title_az' => 'Mexaniki və Smart Kilidlər',
                'title_en' => 'Mechanical & Smart Locks',
                'title_ru' => 'Механические и умные замки',
                'title_de' => 'Mechanische & Smart-Schlösser',
                'title_fr' => 'Serrures mécaniques et intelligentes',
                'title_es' => 'Cerraduras mecánicas e inteligentes',
                'title_zh' => '机械锁与智能锁',

                'description_az' =>
                    'Ənənəvi mexaniki kilidlərin etibarlılığı ilə smart kilidlərin rahat və yüksək təhlükəsizlik imkanlarını birləşdirən müasir kilid həlləri.',

                'description_en' =>
                    'Modern lock solutions that combine the reliability of traditional mechanical locks with the convenience and high security of smart locks.',

                'description_ru' =>
                    'Современные замки, объединяющие надёжность механических систем с удобством и высокой безопасностью умных замков.',

                'description_de' =>
                    'Moderne Schlosslösungen, die mechanische Zuverlässigkeit mit intelligenter Sicherheit verbinden.',

                'description_fr' =>
                    'Solutions de verrouillage modernes combinant fiabilité mécanique et sécurité intelligente.',

                'description_es' =>
                    'Soluciones modernas que combinan cerraduras mecánicas con tecnología inteligente.',

                'description_zh' =>
                    '结合传统机械锁可靠性与智能锁高安全性的现代锁具方案。',

                'order' => 4,
                'is_active' => 1,
            ],

            /* ===================== 5. CAMERAS ===================== */
            [
                'icon' => 'flaticon-camera',

                'title_az' => 'Təhlükəsizlik Kameraları',
                'title_en' => 'Security Cameras',
                'title_ru' => 'Камеры безопасности',
                'title_de' => 'Sicherheitskameras',
                'title_fr' => 'Caméras de sécurité',
                'title_es' => 'Cámaras de seguridad',
                'title_zh' => '安全摄像头',

                'description_az' =>
                    'Daxili və xarici mühitlər üçün real vaxt görüntü, bildirişlər və 24/7 nəzarət təmin edən kamera sistemləri.',

                'description_en' =>
                    'Indoor and outdoor camera systems offering real-time video, instant alerts, and 24/7 monitoring.',

                'description_ru' =>
                    'Камеры для помещений и улицы с онлайн-видео и круглосуточным мониторингом.',

                'description_de' =>
                    'Innen- und Außenkameras mit Live-Überwachung rund um die Uhr.',

                'description_fr' =>
                    'Systèmes de caméras intérieures et extérieures avec surveillance continue.',

                'description_es' =>
                    'Cámaras interiores y exteriores con monitoreo en tiempo real.',

                'description_zh' =>
                    '提供实时画面、全天候监控的室内外摄像系统。',

                'order' => 5,
                'is_active' => 1,
            ],

            /* ===================== 6. SAFES ===================== */
            [
                'icon' => 'flaticon-safe',

                'title_az' => 'Seyflər',
                'title_en' => 'Safes',
                'title_ru' => 'Сейфы',
                'title_de' => 'Tresore',
                'title_fr' => 'Coffres-forts',
                'title_es' => 'Cajas fuertes',
                'title_zh' => '保险箱',

                'description_az' =>
                    'Dəyərli əşyalarınızı, sənədlərinizi və pullarınızı maksimum təhlükəsizliklə qoruyan möhkəm seyf həlləri.',

                'description_en' =>
                    'Durable and reliable safes designed to protect valuables, documents, and money.',

                'description_ru' =>
                    'Надежные сейфы для защиты ценностей, документов и денег.',

                'description_de' =>
                    'Robuste Tresore zum Schutz wichtiger Werte.',

                'description_fr' =>
                    'Coffres-forts durables pour la protection maximale.',

                'description_es' =>
                    'Cajas fuertes resistentes para máxima seguridad.',

                'description_zh' =>
                    '为贵重物品、文件和资金提供高安全保护的保险箱。',

                'order' => 6,
                'is_active' => 1,
            ],

            /* ===================== 7. ACCESS CONTROL ===================== */
            [
                'icon' => 'flaticon-access-control',

                'title_az' => 'Giriş-Çıxış Nəzarət Sistemləri',
                'title_en' => 'Access Control Systems',
                'title_ru' => 'Системы контроля доступа',
                'title_de' => 'Zugangskontrollsysteme',
                'title_fr' => 'Systèmes de contrôle d’accès',
                'title_es' => 'Sistemas de control de acceso',
                'title_zh' => '门禁控制系统',

                'description_az' =>
                    'Kartlı, kodlu və biometrik texnologiyalarla bütün zonalara avtomatik və təhlükəsiz giriş nəzarəti.',

                'description_en' =>
                    'Secure and automated access management using card, keypad, and biometric technologies.',

                'description_ru' =>
                    'Безопасный контроль доступа с использованием карт, кодов и биометрии.',

                'description_de' =>
                    'Automatische Zugangskontrolle mit Karten- und Biometriesystemen.',

                'description_fr' =>
                    'Gestion sécurisée des accès avec technologies biométriques.',

                'description_es' =>
                    'Control de acceso automático y seguro.',

                'description_zh' =>
                    '通过卡片、密码和生物识别实现安全的出入口管理。',

                'order' => 7,
                'is_active' => 1,
            ],

        ]);
    }
}
