<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallationStep extends Model
{
    protected $table = 'installation_steps';

    protected $fillable = [
        'installation_section_id',
        'step_number',

        // TITLE (71 / 72 / 73)
        'title_az','title_en','title_ru','title_de',
        'title_es','title_fr','title_zh',

        // DESCRIPTION (71.1 / 72.1 / 73.1)
        'description_az','description_en','description_ru','description_de',
        'description_es','description_fr','description_zh',

        'icon',
        'sort_order',
        'is_active',
    ];

    /* =======================
       RELATIONS
    ======================= */
    public function section()
    {
        return $this->belongsTo(InstallationSection::class);
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
