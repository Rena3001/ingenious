<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePackageSection extends Model
{
    protected $table = 'service_package_sections';

    protected $fillable = [
        // TITLE — 76
        'title_az','title_en','title_ru','title_de','title_es','title_fr','title_zh',

        // SUBTITLE — 76.1
        'subtitle_az','subtitle_en','subtitle_ru','subtitle_de',
        'subtitle_es','subtitle_fr','subtitle_zh',

        // NOTE MAIN — 76.2 / 76.3
        'note_az','note_en','note_ru','note_de',
        'note_es','note_fr','note_zh',

        // NOTE REMOTE — 76.5
        'remote_note_az','remote_note_en','remote_note_ru','remote_note_de',
        'remote_note_es','remote_note_fr','remote_note_zh',

        'is_active',
    ];

    /* ======================
       RELATIONS
    ====================== */
    public function packages()
    {
        return $this->hasMany(ServicePackage::class)
            ->where('is_active', true)
            ->orderBy('sort_order');
    }

    /* ======================
       HELPERS (MULTI LANG)
    ====================== */
    public function getTitle($locale)
    {
        return $this->{'title_'.$locale} ?? $this->title_az;
    }

    public function getSubtitle($locale)
    {
        return $this->{'subtitle_'.$locale} ?? $this->subtitle_az;
    }

    public function getNote($locale)
    {
        return $this->{'note_'.$locale} ?? $this->note_az;
    }

    public function getRemoteNote($locale)
    {
        return $this->{'remote_note_'.$locale} ?? $this->remote_note_az;
    }
}
