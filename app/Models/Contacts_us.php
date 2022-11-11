<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts_us extends Model
{
    use HasFactory;
    protected $fillable=[
        'map_url','title_page_en','title_page_am'
    ];
}
