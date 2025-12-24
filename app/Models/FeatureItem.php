<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeatureItem extends Model
{
    protected $fillable = [
        'feature_section_id',
        'icon',
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',
        'text_az',
        'text_en',
        'text_ru',
        'text_de',
        'text_fr',
        'text_es',
        'text_zh',
        'sort_order',
        'is_active'
    ];

    public function section()
    {
        return $this->belongsTo(FeatureSection::class, 'feature_section_id');
    }
}
