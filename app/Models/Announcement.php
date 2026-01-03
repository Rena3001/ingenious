<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Announcement extends Model
{
    protected $table = 'announcements';

    protected $fillable = [

        // Slug & type
        'slug',
        'type',

        // Title (7 languages)
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',

        // Intro text (7 languages)
        'intro_az',
        'intro_en',
        'intro_ru',
        'intro_de',
        'intro_fr',
        'intro_es',
        'intro_zh',

        // Full content (7 languages)
        'content_az',
        'content_en',
        'content_ru',
        'content_de',
        'content_fr',
        'content_es',
        'content_zh',

        // Media
        'main_image',
        'gallery',

        // Campaign dates
        'start_date',
        'end_date',

        // Status & sorting
        'is_active',
        'sort_order',
        'published_at',
    ];

    protected $casts = [
        'gallery'       => 'array',
        'is_active'     => 'boolean',
        'published_at'  => 'datetime',
        'start_date'    => 'date',
        'end_date'      => 'date',
    ];

    /* =================================================
     | Locale helper
     ================================================= */
    protected function getLocalized(string $field)
    {
        $locale = app()->getLocale();
        $column = $field . '_' . $locale;

        return $this->$column ?? $this->{$field . '_en'};
    }

    /* =================================================
     | Accessors (Blade üçün təmiz istifadə)
     ================================================= */
    public function getTitleAttribute()
    {
        return $this->getLocalized('title');
    }

    public function getIntroAttribute()
    {
        return $this->getLocalized('intro');
    }

    public function getContentAttribute()
    {
        return $this->getLocalized('content');
    }

    /* =================================================
     | Scopes
     ================================================= */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeType($query, string $type)
    {
        return $query->where('type', $type);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('published_at');
    }

    /* =================================================
     | Auto slug
     ================================================= */
    protected static function booted()
    {
        static::creating(function ($item) {
            if (empty($item->slug)) {
                $item->slug = Str::slug($item->title_en) . '-' . uniqid();
            }
        });
    }
}
