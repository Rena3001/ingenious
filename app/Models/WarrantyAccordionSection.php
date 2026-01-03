<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyAccordionSection extends Model
{
    protected $table = 'warranty_accordion_sections';

    protected $fillable = [
        'background_image',

        // Titles
        'title_az','title_en','title_ru',
        'title_de','title_fr','title_es','title_zh',

        // CTA
        'cta_email',

        'is_active',
    ];

    /* ===============================
       RELATIONS
    =============================== */

    public function items()
    {
        return $this->hasMany(WarrantyAccordionItem::class, 'accordion_section_id')
            ->where('is_active', true)
            ->orderBy('sort_order');
    }

    /* ===============================
       HELPERS (SAFE GETTERS)
    =============================== */

}
