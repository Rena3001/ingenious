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

        'contact_desc_az',
        'contact_desc_en',
        'contact_desc_ru',
        'logo','logo_white',

                // Social links
        'facebook',
        'instagram',
        'linkedin',
        'twitter',
        'telegram',

    ];
}
