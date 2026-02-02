<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnershipPage extends Model
{
    protected $table = 'partnership_pages';

    protected $fillable = [
        // Page title
        'page_title_az',
        'page_title_en',
        'page_title_ru',
        'page_title_de',
        'page_title_fr',
        'page_title_es',
        'page_title_zh',

        // Sidebar title
        'sidebar_title_az',
        'sidebar_title_en',
        'sidebar_title_ru',
        'sidebar_title_de',
        'sidebar_title_fr',
        'sidebar_title_es',
        'sidebar_title_zh',

        // Category
        'category_az',
        'category_en',
        'category_ru',
        'category_de',
        'category_fr',
        'category_es',
        'category_zh',

        // Intro text
        'intro_text_az',
        'intro_text_en',
        'intro_text_ru',
        'intro_text_de',
        'intro_text_fr',
        'intro_text_es',
        'intro_text_zh',

        // Description text
        'description_text_az',
        'description_text_en',
        'description_text_ru',
        'description_text_de',
        'description_text_fr',
        'description_text_es',
        'description_text_zh',

        // Lists
        'collaboration_types',
        'principles',

        // CTA
        'cta_button_link',

        // Images
        'image_1',
        'image_2',
        'image_3',

        // Status
        'is_active',
    ];

    protected $casts = [
        'collaboration_types' => 'array',
        'principles' => 'array',
        'is_active' => 'boolean',
    ];

    /* =================================================
     | Language helper
     ================================================= */
    protected function getLocalizedField(string $field)
    {
        $locale = app()->getLocale();
        $column = $field . '_' . $locale;

        return $this->$column ?? $this->{$field . '_en'};
    }

    /* =================================================
     | Accessors (clean usage in Blade)
     ================================================= */
    public function getPageTitleAttribute()
    {
        return $this->getLocalizedField('page_title');
    }

    public function getSidebarTitleAttribute()
    {
        return $this->getLocalizedField('sidebar_title');
    }

    public function getCategoryAttribute()
    {
        return $this->getLocalizedField('category');
    }

    public function getIntroTextAttribute()
    {
        return $this->getLocalizedField('intro_text');
    }

    public function getDescriptionTextAttribute()
    {
        return $this->getLocalizedField('description_text');
    }
    public function getCollaborationTypesLocalizedAttribute()
    {
        $locale = app()->getLocale();

        return collect($this->collaboration_types ?? [])
            ->map(fn($item) => $item[$locale] ?? $item['en'] ?? null)
            ->filter()
            ->values();
    }

    public function getPrinciplesLocalizedAttribute()
    {
        $locale = app()->getLocale();

        return collect($this->principles ?? [])
            ->map(fn($item) => $item[$locale] ?? $item['en'] ?? null)
            ->filter()
            ->values();
    }
}
