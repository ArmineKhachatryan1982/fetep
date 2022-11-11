<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treyning extends Model
{
    use HasFactory;
     protected $fillable=[
        'imagepath',
        'img_text_am',
        'img_text_en',
        'title_en',
        'title_am',
        'text_one_am',
        'text_one_en',
        'text_two_am',
        'text_two_en',
        // 'ckeditor_en',
        // 'ckeditor_am',

    ];
}
