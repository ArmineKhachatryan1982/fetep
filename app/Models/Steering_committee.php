<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steering_committee extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_en',
        'title_am',
        'paragraph_one_en',
        'paragraph_one_am',
        'paragraph_two_en',
        'paragraph_two_am',
    ];
    public function steering_imgs()
    {
        return $this->hasMany(Steering_img::class);
    }
}
