<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class b_image extends Model
{
    use HasFactory;

       //uno a uno
       public function promos(){
        return $this->hasOne(promos::class);
     }

     // muchos a uno
     public function carrimages(){
        return $this->belongsTo(carrimages::class);
     }

}
