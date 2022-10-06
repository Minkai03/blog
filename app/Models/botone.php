<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class botone extends Model
{
    use HasFactory;

     //relacion uno a muchos
     public function peliculas(){
        return $this->hasMany(peliculas::class);
     }

     //relacion uno a muchos
     public function horarios(){
        return $this->hasMany(horarios::class);
     }

     //relacion uno a muchos
     public function beneficios(){
        return $this->hasMany(beneficios::class);
     }

     //relacion uno a muchos
     public function promos(){
        return $this->hasMany(promos::class);
     }

     
}
