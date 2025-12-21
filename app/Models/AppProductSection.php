<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AppProductSection extends Model
{
    protected $fillable = [
        'image',

        'title_az','title_en','title_es','title_de','title_fr','title_ru','title_zh',

        'description_az','description_en','description_es',
        'description_de','description_fr','description_ru','description_zh',

        // ICON CLASS NAMES
        'icon_1','icon_2','icon_3',

        'icon_1_text_az','icon_1_text_en','icon_1_text_es',
        'icon_1_text_de','icon_1_text_fr','icon_1_text_ru','icon_1_text_zh',

        'icon_2_text_az','icon_2_text_en','icon_2_text_es',
        'icon_2_text_de','icon_2_text_fr','icon_2_text_ru','icon_2_text_zh',

        'icon_3_text_az','icon_3_text_en','icon_3_text_es',
        'icon_3_text_de','icon_3_text_fr','icon_3_text_ru','icon_3_text_zh',

        'is_active'
    ];
}
