<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titleimage extends Model
{
    use HasFactory;
    protected $fillable = [
        'homepage_title_img',
        'homepage_title_img_768',
        'homepage_title_img_425',
        'trainingpage_title_img',
        'trainingpage_title_img_768',
        'trainingpage_title_img_425',
    ];

}
