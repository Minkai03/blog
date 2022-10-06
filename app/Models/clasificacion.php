<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasificacion extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function peliculas(){
        return $this->hasMany(peliculas::class);
     }
}
