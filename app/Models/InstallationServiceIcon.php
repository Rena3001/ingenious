<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstallationServiceIcon extends Model
{
    protected $fillable = [
        'installation_service_id',
        'icon',
        'title_az',
        'title_en',
        'title_ru',
        'title_de',
        'title_fr',
        'title_es',
        'title_zh',
        'order',
    ];

    public function service()
    {
        return $this->belongsTo(InstallationService::class);
    }
}
