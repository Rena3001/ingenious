<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallToAction extends Model
{
    protected $fillable = [
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
}
