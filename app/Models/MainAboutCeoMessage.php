<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainAboutCeoMessage extends Model
{
    protected $fillable = [
        'main_about_page_id',

        'title_az', 'title_en', 'title_ru', 'title_de',
        'title_es', 'title_fr', 'title_zh',

        'message_az', 'message_en', 'message_ru', 'message_de',
        'message_es', 'message_fr', 'message_zh',

        'signature',
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
