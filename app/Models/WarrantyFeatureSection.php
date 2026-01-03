<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyFeatureSection extends Model
{
    protected $table = 'warranty_feature_sections';

    protected $fillable = [
        'background_image',

        // Titles
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',

        // Descriptions
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_fr',
        'description_es',
        'description_zh',

        'button_link',
        'is_active',
    ];

    /* ===============================
       RELATIONS
    =============================== */

    public function items()
    {
        return $this->hasMany(WarrantyFeatureItem::class, 'feature_section_id')
            ->where('is_active', true)
            ->orderBy('sort_order');
    }



  
}
