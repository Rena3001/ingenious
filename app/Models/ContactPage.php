<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_az','title_en','title_ru',
        'description_az','description_en','description_ru',
        'button_text_az','button_text_en','button_text_ru',
        'button_link',
        'background',
        
    ];
}
