<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni_association_img extends Model
{
    use HasFactory;
    protected $fillable=[
        'alumni_associations_id',
        'img_url',
    ];
    public function alumni_associations(){
        return $this->belongsTo(Alumni_association::class);
    }
}
