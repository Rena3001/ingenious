<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductShowcase extends Model
{
    protected $fillable = [
        'image',

        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',

        'description_az','description_en','description_ru',
        'description_de','description_fr','description_es','description_zh',

        'icon_1','icon_2','icon_3',

        'icon_1_text_az','icon_1_text_en','icon_1_text_ru',
        'icon_1_text_de','icon_1_text_fr','icon_1_text_es','icon_1_text_zh',

        'icon_2_text_az','icon_2_text_en','icon_2_text_ru',
        'icon_2_text_de','icon_2_text_fr','icon_2_text_es','icon_2_text_zh',

        'icon_3_text_az','icon_3_text_en','icon_3_text_ru',
        'icon_3_text_de','icon_3_text_fr','icon_3_text_es','icon_3_text_zh',

        'button_link','is_active'
    ];
}
