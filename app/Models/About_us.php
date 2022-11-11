<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_us extends Model
{
    use HasFactory;
    protected $fillable=[
        'paragraph_one_en',
        'paragraph_one_am',
        'paragraph_two_en',
        'paragraph_two_am',
        'paragraph_tree_en',
        'paragraph_tree_am',
        'img_one',
        'img_two',
        'img_tree',
        'img_fore',

    ];

     
    public function about_imgs()
    {
        return $this->hasMany(About_img::class);
    }

}
