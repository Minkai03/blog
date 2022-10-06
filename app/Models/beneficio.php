<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficio extends Model
{
    use HasFactory;

     //relacion uno a muchos
     public function tickets(){
        return $this->hasMany(tickets::class);
     }

      //relacion uno a uno
    public function codigos(){
        return $this->hasOne(codigos::class);
     }
}
