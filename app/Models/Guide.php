<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    protected $table = 'guides';

    protected $fillable = [

        /* ===============================
           RELATION
        =============================== */
        'category_id',

        /* ===============================
           PRODUCT / GUIDE NAME (7 LANG)
        =============================== */
        'product_name_az',
        'product_name_en',
        'product_name_ru',
        'product_name_de',
        'product_name_es',
        'product_name_fr',
        'product_name_zh',

        /* ===============================
           MODEL CODE
        =============================== */
        'model_code',

        /* ===============================
           MEDIA
        =============================== */
        'video_embed_url',
        'video_watch_url',

        /* ===============================
           DESCRIPTION (7 LANG)
        =============================== */
        'description_az',
        'description_en',
        'description_ru',
        'description_de',
        'description_es',
        'description_fr',
        'description_zh',

        /* ===============================
           META
        =============================== */
        'is_active',
        'published_at',
    ];

    protected $casts = [
        'is_active'    => 'boolean',
        'published_at' => 'datetime',
    ];

    /* =====================================================
       RELATIONS
    ===================================================== */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /* =====================================================
       MULTI-LANGUAGE HELPERS
    ===================================================== */

    public function getProductName(?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $field = 'product_name_' . $locale;

        return $this->{$field}
            ?? $this->product_name_az
            ?? '';
    }

    public function getDescription(?string $locale = null): string
    {
        $locale = $locale ?? app()->getLocale();
        $field = 'description_' . $locale;

        return $this->{$field}
            ?? $this->description_az
            ?? '';
    }

    /* =====================================================
       MEDIA HELPERS
    ===================================================== */

    public function hasVideo(): bool
    {
        return !empty($this->video_embed_url);
    }

    public function getEmbedUrl(): ?string
    {
        return $this->video_embed_url;
    }

    public function getWatchUrl(): ?string
    {
        return $this->video_watch_url;
    }

    /* =====================================================
       STATUS HELPERS
    ===================================================== */

    public function isPublished(): bool
    {
        if (!$this->is_active) {
            return false;
        }

        if ($this->published_at && $this->published_at->isFuture()) {
            return false;
        }

        return true;
    }
}
