<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort_group extends Model
{
    use HasFactory;
     protected $fillable=[
        'cohort_group_en',
        'cohort_group_am',
       'cohort_img_name',
       'cohort_pic_title_en',
       'cohort_pic_title_am',
       'cohort_img_text_en',
       'cohort_img_text_am'
    ];
}


