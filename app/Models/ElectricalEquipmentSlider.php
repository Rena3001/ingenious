<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElectricalEquipmentSlider extends Model
{
    protected $table = 'electrical_equipment_home_sliders';

    protected $fillable = [
        'background_image',
        'content_image',
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
        'button_link',
        'sort_order',
        'is_active',
    ];

      public function getTitle(string $locale): ?string
    {
        return $this->{'title_' . $locale}
            ?? $this->title_en;
    }

    public function getDescription(string $locale): ?string
    {
        return $this->{'description_' . $locale}
            ?? $this->description_en;
    }
}
