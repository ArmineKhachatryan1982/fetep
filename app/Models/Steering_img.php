<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steering_img extends Model
{
    use HasFactory;
    protected $fillable=[
        'steering_committees_id',
        'img_name',
    ];
    public function steering_committees(){
        return $this->belongsTo(Steering_committee::class);
    }
}
