<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSupportSection extends Model
{
    protected $fillable = [
        'background_image',
        'image',
        'title_az',
        'description_az',
        'title_en',
        'description_en',
        'title_ru',
        'description_ru',
        'title_de',
        'description_de',
        'title_fr',
        'description_fr',
        'title_es',
        'description_es',
        'title_zh',
        'description_zh',
        'icon_1',
        'icon_1_url',
        'icon_2',
        'icon_2_url',
        'icon_3',
        'icon_3_url',
        'button_url',
        'is_active',
    ];
    public function getTitle(string $locale): string
    {
        return $this->{'title_' . $locale} ?? $this->title_en;
    }

    public function getDescription(string $locale): string
    {
        return $this->{'description_' . $locale} ?? $this->description_en;
    }

    /* ========= ICON HELPERS ========= */
    public function getIconClass(int $i): ?string
    {
        return $this->{"icon_$i"};
    }

    public function getIconUrl(int $i): ?string
    {
        return $this->{"icon_{$i}_url"};
    }
}
