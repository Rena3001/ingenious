<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupportResourcesSection extends Model
{
    protected $table = 'support_resources_sections'; 

    protected $fillable = [
        // Section title
        'section_title_az',
        'section_title_en',
        'section_title_ru',
        'section_title_es',
        'section_title_de',
        'section_title_fr',
        'section_title_zh',

        // Item 1
        'item_1_icon',
        'item_1_title_az',
        'item_1_title_en',
        'item_1_title_ru',
        'item_1_title_es',
        'item_1_title_de',
        'item_1_title_fr',
        'item_1_title_zh',

        // Item 2
        'item_2_icon',
        'item_2_title_az',
        'item_2_title_en',
        'item_2_title_ru',
        'item_2_title_es',
        'item_2_title_de',
        'item_2_title_fr',
        'item_2_title_zh',

        // Item 3
        'item_3_icon',
        'item_3_title_az',
        'item_3_title_en',
        'item_3_title_ru',
        'item_3_title_es',
        'item_3_title_de',
        'item_3_title_fr',
        'item_3_title_zh',

        'is_active',
    ];

    /* =====================
       SECTION TITLE
    ====================== */
    public function getSectionTitle(): string
    {
        $locale = app()->getLocale();
        $field  = "section_title_{$locale}";

        return $this->$field
            ?? $this->section_title_en
            ?? '';
    }

    /* =====================
       ITEM TITLE
       $number = 1 | 2 | 3
    ====================== */
    public function getItemTitle(int $number): string
    {
        $locale = app()->getLocale();
        $field  = "item_{$number}_title_{$locale}";

        return $this->$field
            ?? $this->{"item_{$number}_title_en"}
            ?? '';
    }

    /* =====================
       ITEM ICON
    ====================== */
    public function getItemIcon(int $number): ?string
    {
        return $this->{"item_{$number}_icon"} ?? null;
    }
}
