<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Our_partner extends Model
{
    use HasFactory;
    protected $fillable=['img_name','title_text_am','title_text_en','text_am','text_en','status'];
}
