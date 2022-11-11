<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses_info extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_url',
        'img_text_en',
        'img_text_am',
        'title_en',
        'title_am',
        'text_one_en',
        'text_one_am',
        'text_two_en',
        'text_two_am'
    ];
    public function courses(){
        return $this->belongsTo(Courses::class);
    }

}
