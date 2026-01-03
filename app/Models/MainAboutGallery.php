<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainAboutGallery extends Model
{
    protected $fillable = [
        'main_about_page_id',
        'image',
        'sort_order',
    ];

    public function page()
    {
        return $this->belongsTo(MainAboutPage::class, 'main_about_page_id');
    }
}
