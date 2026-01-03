<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [

        // Slug & category
        'slug',
        'category',

        // Titles (7 languages)
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',

        // Short descriptions (7 languages)
        'short_description_az',
        'short_description_en',
        'short_description_ru',
        'short_description_de',
        'short_description_fr',
        'short_description_es',
        'short_description_zh',

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
        'video_url',

        // Event specific
        'event_date',
        'event_location',

        // Flags
        'is_featured',
        'is_active',

        // Publish
        'published_at',
    ];

    protected $casts = [
        'gallery'       => 'array',
        'is_featured'   => 'boolean',
        'is_active'     => 'boolean',
        'published_at'  => 'datetime',
        'event_date'    => 'date',
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
     | Accessors (Blade-də təmiz istifadə)
     ================================================= */
    public function getTitleAttribute()
    {
        return $this->getLocalized('title');
    }

    public function getShortDescriptionAttribute()
    {
        return $this->getLocalized('short_description');
    }

    public function getContentAttribute()
    {
        return $this->getLocalized('content');
    }

    /* =================================================
     | Scopes (filter üçün)
     ================================================= */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /* =================================================
     | Auto slug (istəsən Filament-də deaktiv edərik)
     ================================================= */
    protected static function booted()
    {
        static::creating(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title_en) . '-' . uniqid();
            }
        });
    }
}
