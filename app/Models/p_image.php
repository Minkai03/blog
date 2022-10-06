<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class p_image extends Model
{
    use HasFactory;

     //uno a uno
     public function peliculas(){
        return $this->hasOne(peliculas::class);
     }

     // muchos a unos
     public function carrimages(){
        return $this->belongsTo(carrimages::class);
     }

}
