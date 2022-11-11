<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
     protected $fillable=[
        'home_title_en',
        'home_title_am',
        'training_title_en',
        'training_title_am',
    ];
}
