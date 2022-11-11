<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_img extends Model
{
    use HasFactory;
    protected $fillable=[
        'about_uses_id',
        'img_one',
        'img_two',
        'img_tree',
        'img_index'
    ];
    public function about_uses(){
        return $this->belongsTo(About_us::class);
    }
}
