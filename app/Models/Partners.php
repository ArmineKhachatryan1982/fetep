<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_am',
        'name_en',
        'min_text_en',
        'min_text_am',
        'img_partner',
        'compni_logo',
        'des_am',
        'des_en',
        'text_one_am',
        'text_one_en',
        'text_two_am',
        'text_two_en',
        'text_tree_am',
        'text_three_en',
    ];
}
   
          