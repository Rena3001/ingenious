<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WarrantyAccordionItem extends Model
{
    protected $table = 'warranty_accordion_items';

    protected $fillable = [
        'accordion_section_id',

        // Titles
        'title_az','title_en','title_ru',
        'title_de','title_fr','title_es','title_zh',

        // Content
        'content_az','content_en','content_ru',
        'content_de','content_fr','content_es','content_zh',

        'sort_order',
        'is_active',
    ];

    /* ===============================
       RELATIONS
    =============================== */

    public function section()
    {
        return $this->belongsTo(WarrantyAccordionSection::class, 'accordion_section_id');
    }

    /* ===============================
       HELPERS
    =============================== */

    
}
