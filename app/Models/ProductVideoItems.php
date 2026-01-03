<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVideoItems extends Model
{
    protected $table = 'product_video_items';

    protected $fillable = [
        'product_video_section_id',
        'category',
        'image',
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
    ];

    public function section()
    {
        return $this->belongsTo(ProductVideoSections::class, 'product_video_section_id');
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
