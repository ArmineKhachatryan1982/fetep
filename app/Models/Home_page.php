<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_page extends Model
{
    use HasFactory;
    protected $fillable=['img_name','about_img_name',];

    public function home_page_texts()
    {
        return $this->hasMany(Home_page_text::class);
    }



    public function home_page_about_texts()
    {
        return $this->hasMany(Home_page_about_text::class);
    }

}
