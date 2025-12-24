<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NightVisionSection extends Model
{
    protected $table = 'night_vision_sections';

    protected $fillable = [
        'title_az',
        'title_en',
        'title_ru',
        'title_es',
        'title_de',
        'title_fr',
        'title_zh',
        'description_az',
        'description_en',
        'description_ru',
        'description_es',
        'description_de',
        'description_fr',
        'description_zh',
        'button_primary_url',
        'button_secondary_url',
        'image',
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
