<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceItem extends Model
{
    protected $fillable = [
        'icon',
        'image',
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
        'overlay_az',
        'overlay_en',
        'overlay_ru',
        'overlay_de',
        'overlay_fr',
        'overlay_es',
        'overlay_zh',
        'button_link',
        'sort_order',
        'is_active'
    ];

    public function title($locale)
    {
        return $this->{'title_' . $locale};
    }

    public function description($locale)
    {
        return $this->{'description_' . $locale};
    }

    public function overlay($locale)
    {
        return $this->{'overlay_' . $locale};
    }
}
