<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_page_about_text extends Model
{
    use HasFactory;
    protected $fillable=['home_page_id','about_text_am','about_text_en','status'];

    public function home_pages(){
        return $this->belongsTo(Home_page::class);
    }
}
