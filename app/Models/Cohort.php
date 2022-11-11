<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;
    protected $fillable=[
        'text_en',
        'text_am',
        'data_one_am',
        'data_one_en',
        'data_two_am',
        'data_two_en',
        'title_one_am',
        'title_one_en',
        'title_two_am',
        'title_two_ens',

    ];

    public function cohort_infos()
    {
        return $this->hasMany(Cohort_info::class);
    }
    public function cohort_infos_titles()
    {
        return $this->hasOneThrough(Cohort_info::class, Cohort_title::class);
    }
}
