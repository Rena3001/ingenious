<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        Slider::truncate();

        Slider::create([
            /* ================= TITLE (9) ================= */
            'title_az' => 'Daha Təhlükəsiz, Daha Ağıllı və Daha Rahat Bir Həyat Üçün',
            'title_en' => 'For a Safer, Smarter, and More Comfortable Life',
            'title_ru' => 'Для более безопасной, умной и комфортной жизни',
            'title_de' => 'Für ein sichereres, intelligenteres und komfortableres Leben',
            'title_es' => 'Para una vida más segura, inteligente y cómoda',

            /* ================= DESCRIPTION (10 + 11) ================= */
            'description_az' =>
                'Ağıllı və ya ənənəvi — seçim sizinindir, amma əsas olan təhlükəsizliyinizin və rahat həyatınızın hər zaman birinci yerdə olmasıdır.
                
BAMoONE olaraq mexaniki və smart kilidlər, təhlükəsizlik kameraları, seyflər, məişət avadanlıqları, elektrik təchizatı və elektronika daxil olmaqla geniş məhsul çeşidi təqdim edirik.
Məqsədimiz evinizdə və iş yerinizdə rahatlıq və yüksək təhlükəsizlik yaratmaqdır.',

            'description_en' =>
                'Smart or traditional — the choice is yours, but what truly matters is that your safety and comfort always come first.
                
At BAMoONE, we offer a wide range of products including mechanical and smart locks, security cameras, safes, home appliances, electrical equipment, and consumer electronics.
Our goal is to provide comfort and high-level security for your home and workplace.',

            'description_ru' =>
                'Умный или традиционный — выбор за вами, но главное, чтобы ваша безопасность и комфорт всегда были на первом месте.
                
BAMoONE предлагает широкий ассортимент продукции: механические и умные замки, камеры безопасности, сейфы, бытовую технику и электронику.
Наша цель — обеспечить комфорт и высокий уровень безопасности дома и на работе.',

            'description_de' =>
                'Smart oder traditionell — die Wahl liegt bei Ihnen, doch Sicherheit und Komfort stehen immer an erster Stelle.
                
BAMoONE bietet ein breites Produktsortiment: mechanische und smarte Schlösser, Sicherheitskameras, Tresore, Haushaltsgeräte und Elektronik.
Unser Ziel ist es, Komfort und höchste Sicherheit für Zuhause und Arbeitsplatz zu gewährleisten.',

            'description_es' =>
                'Inteligente o tradicional: la elección es suya, pero su seguridad y comodidad siempre son lo más importante.
                
En BAMoONE ofrecemos una amplia gama de productos: cerraduras mecánicas e inteligentes, cámaras de seguridad, cajas fuertes, electrodomésticos y equipos electrónicos.
Nuestro objetivo es brindar comodidad y seguridad de alto nivel para su hogar y lugar de trabajo.',

            /* ================= CTA (12) ================= */
            'button_key' => 'bamoone_news',
            'button_url' => '/news',

            /* ================= IMAGE & META ================= */
            'image' => 'sliders/home-hero.jpg', // SONRADAN dəyişə bilərsən
            'order' => 1,
            'is_active' => 1,
        ]);
    }
}
