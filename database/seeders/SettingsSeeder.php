<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        // Əgər artıq settings varsa, təkrar yaratmasın
        if (Setting::count() > 0) {
            return;
        }

        Setting::create([
            // ======================
            // CONTACT INFO
            // ======================
            'phone' => '+994 50 123 45 67',
            'email' => 'info@bamoone.com',
            'address' => 'Baku, Azerbaijan',
            'map_iframe' => '<iframe src="https://www.google.com/maps" width="600" height="450"></iframe>',

            // ======================
            // CONTACT TITLES (7 LANG)
            // ======================
            'contact_title_az' => 'Bizimlə Əlaqə',
            'contact_title_en' => 'Contact Us',
            'contact_title_ru' => 'Связаться с нами',
            'contact_title_de' => 'Kontakt',
            'contact_title_es' => 'Contáctanos',

            // ======================
            // CONTACT DESCRIPTIONS
            // ======================
            'contact_desc_az' => 'Bizimlə əlaqə saxlayın, sizə məmnuniyyətlə kömək edək.',
            'contact_desc_en' => 'Get in touch with us, we are happy to help.',
            'contact_desc_ru' => 'Свяжитесь с нами, мы будем рады помочь.',
            'contact_desc_de' => 'Kontaktieren Sie uns, wir helfen Ihnen gerne.',
            'contact_desc_es' => 'Contáctanos, estaremos encantados de ayudarte.',

            // ======================
            // IMAGES (NULL – admin paneldən yüklənəcək)
            // ======================
            'logo' => null,
            'logo_white' => null,
            'contact_background_image' => null,

            // ======================
            // SOCIAL LINKS
            // ======================
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'twitter' => 'https://twitter.com',
            'telegram' => 'https://t.me',
        ]);
    }
}
