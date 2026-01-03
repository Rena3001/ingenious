<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainAboutPage extends Model
{
    protected $fillable = [
        'slug',

        'title_az', 'title_en', 'title_ru', 'title_de',
        'title_es', 'title_fr', 'title_zh',

        'subtitle_az', 'subtitle_en', 'subtitle_ru', 'subtitle_de',
        'subtitle_es', 'subtitle_fr', 'subtitle_zh',

        'intro_az', 'intro_en', 'intro_ru', 'intro_de',
        'intro_es', 'intro_fr', 'intro_zh',

        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /* =====================
        RELATIONS
    ===================== */

    public function galleries()
    {
        return $this->hasMany(MainAboutGallery::class)->orderBy('sort_order');
    }

    public function sections()
    {
        return $this->hasMany(MainAboutSection::class)->orderBy('sort_order');
    }

    public function ceoMessage()
    {
        return $this->hasOne(MainAboutCeoMessage::class);
    }

    /* =====================
        TRANSLATION HELPER
    ===================== */
    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{$field . '_' . $locale};
    }
}
