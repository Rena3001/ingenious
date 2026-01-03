<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyFeatureSectionTwo extends Model
{
    protected $table = 'feature_section_twos';

    protected $fillable = [

        /* Background */
        'background_image',

        /* Title */
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',

        /* Description */
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',

        /* Icon 1 */
        'icon_1',
        'icon_1_title_az',
        'icon_1_title_en',
        'icon_1_title_ru',
        'icon_1_title_de',
        'icon_1_title_fr',
        'icon_1_title_es',
        'icon_1_title_zh',

        /* Icon 2 */
        'icon_2',
        'icon_2_title_az',
        'icon_2_title_en',
        'icon_2_title_ru',
        'icon_2_title_de',
        'icon_2_title_fr',
        'icon_2_title_es',
        'icon_2_title_zh',

        /* Icon 3 */
        'icon_3',
        'icon_3_title_az',
        'icon_3_title_en',
        'icon_3_title_ru',
        'icon_3_title_de',
        'icon_3_title_fr',
        'icon_3_title_es',
        'icon_3_title_zh',

        /* Status */
        'is_active',
    ];

}
