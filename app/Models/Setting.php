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

        'contact_title_az',
        'contact_title_en',
        'contact_title_ru',
        'contact_title_de',
        'contact_title_es',

        'contact_desc_az',
        'contact_desc_en',
        'contact_desc_ru',
        'contact_desc_de',
        'contact_desc_es',

        'logo',
        'logo_white',

        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'telegram',
    ];
}
