<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'email',
        'map_iframe',
        // Contact titles
        'contact_title_az',
        'contact_title_en',
        'contact_title_ru',
        'contact_title_de',
        'contact_title_es',
        'contact_title_fr',
        'contact_title_zh',

        // Contact descriptions
        'contact_desc_az',
        'contact_desc_en',
        'contact_desc_ru',
        'contact_desc_de',
        'contact_desc_es',
        'contact_desc_fr',
        'contact_desc_zh',

        'logo',
        'logo_white',
        'contact_background_image',

        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'telegram',

        'contact_orders_icon',
        'contact_project_icon',
        'contact_support_icon',
        'contact_partner_icon',
    ];
}
