<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShopSection;

class ShopSectionSeeder extends Seeder
{
    public function run(): void
    {
        ShopSection::updateOrCreate(
            ['id' => 1],
            [
                // ======================
                // TITLE – 50
                // ======================
                'title_az' => 'Tanış olun və İndi Alın',
                'title_en' => 'Discover & Shop Now',
                'title_ru' => 'Откройте и покупайте сейчас',
                'title_de' => 'Entdecken & Jetzt kaufen',
                'title_es' => 'Descubre y compra ahora',
                'title_fr' => 'Découvrez et achetez maintenant',
                'title_zh' => '探索并立即购买',

                // ======================
                // DESCRIPTION – 50.1
                // ======================
                'description_az' => 'Alış üçün təqdim etdiyimiz bütün məhsullar Amerika bazarında Amazon platforması vasitəsilə satışdadır. Xahiş edirik nəzərə alasınız.',
                'description_en' => 'All our products listed for purchase are sold on the U.S. market through the Amazon platform. Please keep this in mind when ordering.',
                'description_ru' => 'Все представленные товары продаются на рынке США через платформу Amazon. Пожалуйста, учитывайте это при заказе.',
                'description_de' => 'Alle angebotenen Produkte werden über die Amazon-Plattform auf dem US-Markt verkauft. Bitte beachten Sie dies bei der Bestellung.',
                'description_es' => 'Todos los productos disponibles para la compra se venden en el mercado de EE. UU. a través de la plataforma Amazon. Téngalo en cuenta al realizar su pedido.',
                'description_fr' => 'Tous les produits proposés à la vente sont commercialisés sur le marché américain via la plateforme Amazon. Veuillez en tenir compte lors de votre commande.',
                'description_zh' => '所有可购买的产品均通过 Amazon 平台在美国市场销售。下单时请注意这一点。',

                'is_active' => true,
            ]
        );
    }
}
