<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SecuritySlider;

class SecuritySliderSeeder extends Seeder
{
    public function run(): void
    {
        SecuritySlider::truncate();

        SecuritySlider::create([
            /* ================= TITLE ================= */
            'title_az' => 'Smart, yoxsa ənənəvi mexaniki kilid?',
            'title_en' => 'Smart or Traditional Mechanical Lock?',
            'title_ru' => 'Умный или механический замок?',
            'title_de' => 'Smartes oder mechanisches Schloss?',
            'title_fr' => 'Serrure intelligente ou mécanique ?',
            'title_es' => '¿Cerradura inteligente o mecánica?',
            'title_zh' => '智能锁还是机械锁？',

            /* ================= DESCRIPTION ================= */
            'description_az' =>
                'Evinizi qorumağın ən doğru yolu düzgün kilid seçimi ilə başlayır.
Gündəlik istifadə üçün həm ənənəvi mexaniki kilidlər, həm də müasir smart kilidlər mövcuddur.
• Mexaniki kilidlər – sadə, tanış və büdcə dostu
• Smart kilidlər – rahat, tam nəzarətli və yüksək təhlükəsizlikli',

            'description_en' =>
                'Choosing the right lock is the first and most important step in protecting your home.
You can choose between traditional mechanical locks and modern smart locks.
• Mechanical locks – simple, familiar, and budget-friendly
• Smart locks – convenient, fully controlled, and highly secure',

            'description_ru' =>
                'Выбор правильного замка — первый и самый важный шаг в защите дома.
Вы можете выбрать традиционный механический замок или современный умный замок.
• Механические замки — простые и доступные
• Умные замки — удобные, полностью управляемые и максимально безопасные',

            'description_de' =>
                'Die Wahl des richtigen Schlosses ist der erste Schritt zur Sicherheit Ihres Zuhauses.
Zur Auswahl stehen mechanische Schlösser und moderne Smart-Schlösser.
• Mechanische Schlösser – einfach und zuverlässig
• Smart-Schlösser – komfortabel, vollständig kontrollierbar und sehr sicher',

            'description_fr' =>
                'Choisir la bonne serrure est la première étape pour sécuriser votre maison.
Vous pouvez opter pour une serrure mécanique traditionnelle ou une serrure intelligente moderne.
• Serrures mécaniques – simples et fiables
• Serrures intelligentes – pratiques, contrôlées et hautement sécurisées',

            'description_es' =>
                'Elegir la cerradura adecuada es el primer paso para proteger su hogar.
Puede elegir entre cerraduras mecánicas tradicionales o cerraduras inteligentes modernas.
• Cerraduras mecánicas – simples y económicas
• Cerraduras inteligentes – cómodas, controladas y altamente seguras',

            'description_zh' =>
                '选择合适的门锁是保护家庭安全的第一步。
您可以选择传统机械锁或现代智能锁。
• 机械锁——简单可靠
• 智能锁——便捷、可控且高度安全',

            /* ================= IMAGE & STATUS ================= */
            'image' => null, // şəkil sonradan
            'is_active' => 1,
            'order' => 1,
        ]);
    }
}
