<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyProcessSection extends Model
{
     protected $table = 'warranty_process_sections';

    protected $fillable = [

        /* Background */
        'background_image',

        /* Main title */
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',

        /* Main description */
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',

        /* Icon 1 – Mission */
        'icon_1',
        'icon_1_title_az',
        'icon_1_title_en',
        'icon_1_title_ru',
        'icon_1_title_de',
        'icon_1_title_fr',
        'icon_1_title_es',
        'icon_1_title_zh',
        'icon_1_desc_az',
        'icon_1_desc_en',
        'icon_1_desc_ru',
        'icon_1_desc_de',
        'icon_1_desc_fr',
        'icon_1_desc_es',
        'icon_1_desc_zh',

        /* Icon 2 – Vision */
        'icon_2',
        'icon_2_title_az',
        'icon_2_title_en',
        'icon_2_title_ru',
        'icon_2_title_de',
        'icon_2_title_fr',
        'icon_2_title_es',
        'icon_2_title_zh',
        'icon_2_desc_az',
        'icon_2_desc_en',
        'icon_2_desc_ru',
        'icon_2_desc_de',
        'icon_2_desc_fr',
        'icon_2_desc_es',
        'icon_2_desc_zh',

        /* Icon 3 – Values */
        'icon_3',
        'icon_3_title_az',
        'icon_3_title_en',
        'icon_3_title_ru',
        'icon_3_title_de',
        'icon_3_title_fr',
        'icon_3_title_es',
        'icon_3_title_zh',
        'icon_3_desc_az',
        'icon_3_desc_en',
        'icon_3_desc_ru',
        'icon_3_desc_de',
        'icon_3_desc_fr',
        'icon_3_desc_es',
        'icon_3_desc_zh',

        /* CTA */

        'button_link',

        /* Status */
        'is_active',
    ];

}
