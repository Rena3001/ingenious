<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSection extends Model
{
    protected $fillable = [
        // TOP SECTION
        'background_image',
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',

        // PRODUCTS (4 cards)
        'product_1_image',
        'product_1_title_az',
        'product_1_title_en',
        'product_1_title_ru',
        'product_1_title_de',
        'product_1_title_fr',
        'product_1_title_es',
        'product_1_title_zh',
        'product_1_desc_az',
        'product_1_desc_en',
        'product_1_desc_ru',
        'product_1_desc_de',
        'product_1_desc_fr',
        'product_1_desc_es',
        'product_1_desc_zh',

        'product_2_image',
        'product_2_title_az',
        'product_2_title_en',
        'product_2_title_ru',
        'product_2_title_de',
        'product_2_title_fr',
        'product_2_title_es',
        'product_2_title_zh',
        'product_2_desc_az',
        'product_2_desc_en',
        'product_2_desc_ru',
        'product_2_desc_de',
        'product_2_desc_fr',
        'product_2_desc_es',
        'product_2_desc_zh',

        'product_3_image',
        'product_3_title_az',
        'product_3_title_en',
        'product_3_title_ru',
        'product_3_title_de',
        'product_3_title_fr',
        'product_3_title_es',
        'product_3_title_zh',
        'product_3_desc_az',
        'product_3_desc_en',
        'product_3_desc_ru',
        'product_3_desc_de',
        'product_3_desc_fr',
        'product_3_desc_es',
        'product_3_desc_zh',

        'product_4_image',
        'product_4_title_az',
        'product_4_title_en',
        'product_4_title_ru',
        'product_4_title_de',
        'product_4_title_fr',
        'product_4_title_es',
        'product_4_title_zh',
        'product_4_desc_az',
        'product_4_desc_en',
        'product_4_desc_ru',
        'product_4_desc_de',
        'product_4_desc_fr',
        'product_4_desc_es',
        'product_4_desc_zh',

        // BUTTON
        'button_url',
        'is_active',
    ];

    public function title($locale)
    {
        return $this->{'title_' . $locale};
    }

    public function description($locale)
    {
        return $this->{'description_' . $locale};
    }

    public function productTitle($i, $locale)
    {
        return $this->{"product_{$i}_title_{$locale}"};
    }

    public function productDesc($i, $locale)
    {
        return $this->{"product_{$i}_desc_{$locale}"};
    }
}
