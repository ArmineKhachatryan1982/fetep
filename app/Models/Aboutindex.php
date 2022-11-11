<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutindex extends Model
{
    use HasFactory;
     protected $fillable=[
         'imgpath','text_am','text_en',
    ];
}
