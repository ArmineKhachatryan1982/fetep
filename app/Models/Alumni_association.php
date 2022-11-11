<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni_association extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_en',
        'title_am',
        'text_one_en',
        'text_one_am',
        'text_two_en',
        'text_two_am',
    ];
    public function alumni_association_imgs()
    {
        return $this->hasMany(Alumni_association_img::class);
    }
}
