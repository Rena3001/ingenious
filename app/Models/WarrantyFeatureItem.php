<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyFeatureItem extends Model
{
    protected $table = 'warranty_feature_items';

    protected $fillable = [
        'feature_section_id',

        'icon',

        // Titles
        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',

        // Texts
        'text_az','text_en','text_ru','text_de','text_fr','text_es','text_zh',

        'sort_order',
        'is_active',
    ];

    /* ===============================
       RELATIONS
    =============================== */

    public function section()
    {
        return $this->belongsTo(WarrantyFeatureSection::class, 'feature_section_id');
    }

    /* ===============================
       HELPERS
    =============================== */

}
