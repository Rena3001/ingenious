<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVideoSections extends Model
{
    protected $table = 'product_video_sections';

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
        'filter_all_label',
        'filter_security_label',
        'filter_home_label',
        'filter_electrical_label',
        'filter_electronics_label',
        'is_active',
    ];

    public function items()
    {
        return $this->hasMany(ProductVideoItems::class, 'product_video_section_id');
    }

    public function getTitle()
    {
        $locale = app()->getLocale();
        $titleField = 'title_' . $locale;
        return $this->$titleField;
    }

    public function getDescription()
    {
        $locale = app()->getLocale();
        $descriptionField = 'description_' . $locale;
        return $this->$descriptionField;
    }
}
