<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoadmapItem extends Model
{
    protected $fillable = [
        'stage_number',
        'icon',
        'image',
        'slug',

        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_es',
        'subtitle_az',
        'subtitle_en',
        'subtitle_ru',
        'subtitle_de',
        'subtitle_es',
        'desc_az',
        'desc_en',
        'desc_ru',
        'desc_de',
        'desc_es',

        'button_link',
        'button_key',
        'is_active',
        'order',
    ];
    public function getTranslation($field, $locale = null)
    {
        $loc = $locale ?? app()->getLocale();
        return $this->{$field . '_' . $loc};
    }


    public function getTitle($locale = null)
    {
        $loc = $locale ?? app()->getLocale();
        return $this->{'title_' . $loc};
    }

    public function getSubtitle($locale = null)
    {
        $loc = $locale ?? app()->getLocale();
        return $this->{'subtitle_' . $loc};
    }

    public function getDesc($locale = null)
    {
        $loc = $locale ?? app()->getLocale();
        return $this->{'desc_' . $loc};
    }

    public function getButtonText($locale = null)
    {
        return \App\Models\Translation::getValue($this->button_key, $locale);
    }
}
