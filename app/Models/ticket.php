<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    // muchos a uno
    public function user(){
        return $this->belongsto(user::class);
}
     //uno a muchos
     public function promos(){
        return $this->hasmany(promos::class);

}

//uno a uno
public function beneficios(){
    return $this->hasOne(beneficios::class);

}

//muchos a uno
public function peliculas(){
    return $this->belongsTo(peliculas::class);

}

     
}
