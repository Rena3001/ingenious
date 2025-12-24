<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccordionItem extends Model
{
    protected $fillable = [
        'accordion_section_id',
        'icon',
        'title_az','title_en','title_ru','title_de','title_fr','title_es','title_zh',
        'content_az','content_en','content_ru','content_de','content_fr','content_es','content_zh',
        'sort_order',
        'is_active'
    ];

    public function section()
    {
        return $this->belongsTo(AccordionSection::class, 'accordion_section_id');
    }
}
