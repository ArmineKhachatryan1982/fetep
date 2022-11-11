<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_and_event extends Model
{
    use HasFactory;
    protected $fillable=['date_en','date_am','title_text_am','title_text_en','index_text_am','index_text_en','text_am','text_en','index_img_name','page_img_name','status'];
}
