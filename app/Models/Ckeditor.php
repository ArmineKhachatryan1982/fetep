<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ckeditor extends Model
{
    use HasFactory;
    protected $fillable=[
        'ckeditor_en',
        'ckeditor_am',
    ];
}
