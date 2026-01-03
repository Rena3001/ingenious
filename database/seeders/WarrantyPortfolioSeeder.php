<?php

namespace Database\Seeders;

use App\Models\WarrantyPortfolioItem;
use App\Models\WarrantyPortfolioSection;
use Illuminate\Database\Seeder;

class WarrantyPortfolioSeeder extends Seeder
{
    public function run(): void
    {
        /* ===============================
           SECTION (27–27.4)
        =============================== */
        $section = WarrantyPortfolioSection::create([
            // TITLE
            'title_az' => 'Satışda Olan Məhsullar',
            'title_en' => 'Available Products on Sale',
            'title_ru' => 'Товары в продаже',
            'title_de' => 'Verfügbare Produkte im Verkauf',
            'title_fr' => 'Produits disponibles à la vente',
            'title_es' => 'Productos disponibles en venta',
            'title_zh' => '在售产品',

            // DESCRIPTION
            'description_az' =>
                'Hal-hazırda satışda olan məhsullarımız və onların qısa təsvirləri ilə tanış ola bilərsiniz. Hər bir məhsulun üzərinə klik edərək əsas satış səhifəsinə keçid edə bilərsiniz.',
            'description_en' =>
                'You can explore our currently available products along with their short descriptions. By clicking on any item, you will be redirected to the main product page.',
            'description_ru' =>
                'Вы можете ознакомиться с товарами, доступными в продаже, и их краткими описаниями. Нажав на товар, вы перейдёте на страницу продукта.',
            'description_de' =>
                'Entdecken Sie unsere aktuell verfügbaren Produkte mit kurzen Beschreibungen. Durch Klicken gelangen Sie zur Produktseite.',
            'description_fr' =>
                'Découvrez nos produits actuellement disponibles avec leurs courtes descriptions. En cliquant, vous serez redirigé vers la page produit.',
            'description_es' =>
                'Explore nuestros productos disponibles junto con descripciones breves. Al hacer clic, accederá a la página del producto.',
            'description_zh' =>
                '您可以浏览当前在售的产品及其简要说明，点击即可进入产品详情页面。',

            'is_active' => true,
        ]);

        /* ===============================
           ITEM (28–28.3)
        =============================== */
        WarrantyPortfolioItem::create([
            'portfolio_section_id' => $section->id,

            // IMAGE
            'image' => 'products/bo1-1-10mb.jpg',

            // TITLE
            'title_az' => 'Keçid qapısı üçün kilidsiz qapı tutuqusu',
            'title_en' => 'Passage Door Knob Lock',
            'title_ru' => 'Дверная ручка без замка',
            'title_de' => 'Türknauf ohne Schloss',
            'title_fr' => 'Poignée de porte sans verrou',
            'title_es' => 'Manija de puerta sin cerradura',
            'title_zh' => '无锁门把手',

            // SHORT DESCRIPTION
            'description_az' =>
                'Mat qara rəngdə, kilidlənməyən passage door knob modeli — daxili otaq və keçid qapıları üçün ideal seçimdir.',
            'description_en' =>
                'Matte black, non-locking passage door knob ideal for interior room and hallway doors.',
            'description_ru' =>
                'Матовая чёрная дверная ручка без замка — идеальна для внутренних помещений.',
            'description_de' =>
                'Mattschwarzer Türknauf ohne Schloss, ideal für Innenräume.',
            'description_fr' =>
                'Poignée de porte noire mate sans verrou, idéale pour les portes intérieures.',
            'description_es' =>
                'Manija de puerta negra mate sin cerradura, ideal para interiores.',
            'description_zh' =>
                '哑光黑色无锁门把手，适用于室内房间和走廊。',

            // LINK
            'link' => '/product/BO1-1-10MB',

            'sort_order' => 1,
            'is_active' => true,
        ]);
    }
}
