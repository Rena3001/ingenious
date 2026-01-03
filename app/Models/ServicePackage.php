<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    protected $table = 'service_packages';

    protected $fillable = [
        'service_package_section_id',

        'package_key',     // basic | priority | premium
        'price',
        'price_unit',

        // TITLE — 77 / 78 / 79
        'title_az','title_en','title_ru','title_de',
        'title_es','title_fr','title_zh',

        // MAIN DESCRIPTION — .1
        'description_main_az','description_main_en','description_main_ru',
        'description_main_de','description_main_es','description_main_fr',
        'description_main_zh',

        // DETAIL DESCRIPTION — .2
        'description_detail_az','description_detail_en','description_detail_ru',
        'description_detail_de','description_detail_es','description_detail_fr',
        'description_detail_zh',

        // REMOTE NOTE — .3
        'remote_note_az','remote_note_en','remote_note_ru',
        'remote_note_de','remote_note_es','remote_note_fr',
        'remote_note_zh',

        'icon',
        'is_featured',
        'sort_order',
        'is_active',
    ];

    /* ======================
       RELATIONS
    ====================== */
    public function section()
    {
        return $this->belongsTo(ServicePackageSection::class);
    }

    /* ======================
       HELPERS
    ====================== */
    public function getTitle($locale)
    {
        return $this->{'title_'.$locale} ?? $this->title_az;
    }

    public function getMainDescription($locale)
    {
        return $this->{'description_main_'.$locale} ?? $this->description_main_az;
    }

    public function getDetailDescription($locale)
    {
        return $this->{'description_detail_'.$locale} ?? $this->description_detail_az;
    }

    public function getRemoteNote($locale)
    {
        return $this->{'remote_note_'.$locale} ?? $this->remote_note_az;
    }

    public function getFormattedPrice()
    {
        return '$'.$this->price.'/'.$this->price_unit;
    }
}
