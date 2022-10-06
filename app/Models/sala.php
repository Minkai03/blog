<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sala extends Model
{
    use HasFactory;

      //uno a muchos
      public function butacas(){
        return $this->hasmany(butacas::class);
     }


     //relacion uno a muchos
    public function peliculas(){
        return $this->hasMany(peliculas::class);
     }

}
