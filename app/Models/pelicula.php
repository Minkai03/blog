<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    use HasFactory;

    //muchas a uno
public function generos(){
    return $this->belongsTo(generos::class);
 }
//relacion muchos a uno
public function clasificacions(){
    return $this->belongsTo(clasificacions::class);
 }
 //relacion una a muchos
 public function tickets(){
    return $this->hasMany(tickets::class);
 }
 //relacion uno a uno
 public function p_images(){
    return $this->hasOne(p_images::class);
 }
//relacion uno a muchos
public function salas(){
    return $this->hasMany(salas::class);
 }
}
