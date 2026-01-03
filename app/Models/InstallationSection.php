<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallationSection extends Model
{
    protected $table = 'installation_sections';

    protected $fillable = [
        // TITLE (70)
        'title_az','title_en','title_ru','title_de','title_es','title_fr','title_zh',

        // DESCRIPTION (70.1)
        'description_az','description_en','description_ru','description_de',
        'description_es','description_fr','description_zh',



        'cta_link',
        'is_active',
    ];

    /* =======================
       RELATIONS
    ======================= */
    public function steps()
    {
        return $this->hasMany(InstallationStep::class)
            ->where('is_active', true)
            ->orderBy('sort_order');
    }

    /* =======================
       HELPERS
    ======================= */
    public function getTitle($locale)
    {
        return $this->{'title_'.$locale} ?? $this->title_az;
    }

    public function getDescription($locale)
    {
        return $this->{'description_'.$locale} ?? $this->description_az;
    }


}
