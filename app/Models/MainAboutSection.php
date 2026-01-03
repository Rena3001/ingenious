<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainAboutSection extends Model
{
    protected $fillable = [
        'main_about_page_id',
        'key',

        'title_az', 'title_en', 'title_ru', 'title_de',
        'title_es', 'title_fr', 'title_zh',

        'content_az', 'content_en', 'content_ru', 'content_de',
        'content_es', 'content_fr', 'content_zh',

        'sort_order',
    ];

    public function page()
    {
        return $this->belongsTo(MainAboutPage::class, 'main_about_page_id');
    }

    public function getTranslation($field, $locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->{$field . '_' . $locale};
    }
}
