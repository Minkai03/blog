<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class butaca extends Model
{
    use HasFactory;

     //muchos a uno
     public function salas(){
        return $this->belongsTo(salas::class);
     }
}
