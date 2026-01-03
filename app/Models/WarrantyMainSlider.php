<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyMainSlider extends Model
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
        'subtitle_az',
        'subtitle_en',
        'subtitle_ru',
        'subtitle_de',
        'subtitle_fr',
        'subtitle_es',
        'subtitle_zh',
        
        'button_link',
        'sort_order',
        'is_active',
    ];

    public function getTitle($locale)
    {
        return $this->{'title_' . $locale} ?? $this->title_en ?? 'Warranty Protection';
    }

    public function getSubtitle($locale)
    {
        return $this->{'subtitle_' . $locale} ?? $this->subtitle_en ?? 'Reliable Warranty Coverage';
    }
}
