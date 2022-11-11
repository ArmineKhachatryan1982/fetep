<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable=[
        'img_index',
        'text_index',
    ];
    public function courses_infos()
    {
        return $this->hasMany(Courses_info::class);
    }
}
