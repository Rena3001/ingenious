<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeatureSection extends Model
{
    protected $table = 'product_feature_sections';

    protected $fillable = [
        'background_image',
        'image',

        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',

        'icon_1','icon_1_title_az','icon_1_title_en','icon_1_title_ru','icon_1_title_de','icon_1_title_fr','icon_1_title_es','icon_1_title_zh',
        'icon_1_desc_az','icon_1_desc_en','icon_1_desc_ru','icon_1_desc_de','icon_1_desc_fr','icon_1_desc_es','icon_1_desc_zh',

        'icon_2','icon_2_title_az','icon_2_title_en','icon_2_title_ru','icon_2_title_de','icon_2_title_fr','icon_2_title_es','icon_2_title_zh',
        'icon_2_desc_az','icon_2_desc_en','icon_2_desc_ru','icon_2_desc_de','icon_2_desc_fr','icon_2_desc_es','icon_2_desc_zh',

        'icon_3','icon_3_title_az','icon_3_title_en','icon_3_title_ru','icon_3_title_de','icon_3_title_fr','icon_3_title_es','icon_3_title_zh',
        'icon_3_desc_az','icon_3_desc_en','icon_3_desc_ru','icon_3_desc_de','icon_3_desc_fr','icon_3_desc_es','icon_3_desc_zh',

        'is_active',
    ];

    /* ================= TITLES ================= */
    public function getTitle(string $locale): string
    {
        return $this->{'title_'.$locale} ?? $this->title_en;
    }

    /* ================= ICONS ================= */
    public function getIconClass(int $i): ?string
    {
        return $this->{"icon_$i"};
    }

    public function getIconTitle(int $i, string $locale): string
    {
        return $this->{"icon_{$i}_title_{$locale}"} 
            ?? $this->{"icon_{$i}_title_en"};
    }

    public function getIconDescription(int $i, string $locale): string
    {
        return $this->{"icon_{$i}_desc_{$locale}"} 
            ?? $this->{"icon_{$i}_desc_en"};
    }
}
