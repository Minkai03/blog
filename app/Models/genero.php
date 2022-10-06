<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function peliculas(){
        return $this->belongsTo(peliculas::class);
     }
}
