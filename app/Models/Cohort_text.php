<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort_text extends Model
{
    use HasFactory;
    protected $fillable=[
        'cohort_text_en',
        'cohort_text_am',
        'cohort_date_en',
        'cohort_date_am',
        'cohort_group_en',
        'cohort_group_am',
        'cohort_date_second_en',
        'cohort_date_second_am',
        'cohort_group_second_en',
        'cohort_group_second_am',
    ];
}
