<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechnicalContent extends Model
{
    protected $table = 'technical_contents';

    protected $fillable = [

        /* ===============================
           LAYOUT & MEDIA
        =============================== */
        'layout',          // default | style-two
        'media_type',      // video | audio | image | none
        'media_url',

        'category_id',    // security_faq, electrical_faq, etc.

        /* ===============================
           TITLES (7 LANG)
        =============================== */
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_es',
        'title_fr',
        'title_zh',

        /* ===============================
           CONTENT (7 LANG)
        =============================== */
        'content_az',
        'content_en',
        'content_ru',
        'content_de',
        'content_es',
        'content_fr',
        'content_zh',

        /* ===============================
           META
        =============================== */
        'published_at',
        'is_active',
    ];

    protected $casts = [
        'published_at' => 'date',
        'is_active'    => 'boolean',
    ];

    /* =====================================================
       HELPERS — MULTI LANGUAGE
    ===================================================== */

    public function getTitle(string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $field = 'title_' . $locale;

        return $this->{$field}
            ?? $this->title_az
            ?? '';
    }

    public function getContent(string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $field = 'content_' . $locale;

        return $this->{$field}
            ?? $this->content_az
            ?? '';
    }

    /* =====================================================
       HELPERS — LAYOUT
    ===================================================== */

    public function isStyleTwo(): bool
    {
        return $this->layout === 'style-two';
    }

    public function getLayoutClass(): string
    {
        return $this->layout === 'style-two'
            ? 'style-two'
            : '';
    }

    /* =====================================================
       HELPERS — MEDIA
    ===================================================== */

    public function hasMedia(): bool
    {
        return !empty($this->media_url) && $this->media_type !== 'none';
    }

    public function isVideo(): bool
    {
        return $this->media_type === 'video';
    }

    public function isAudio(): bool
    {
        return $this->media_type === 'audio';
    }

    public function isImage(): bool
    {
        return $this->media_type === 'image';
    }

    /* ===============================
   FAQ HELPERS (CORRECT)
=============================== */

    public function getQuestion(string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $field = 'title_' . $locale;

        return $this->{$field}
            ?? $this->title_az
            ?? '';
    }

    public function getAnswer(string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $field = 'content_' . $locale;

        return $this->{$field}
            ?? $this->content_az
            ?? '';
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
