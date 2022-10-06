<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    use HasFactory;

     //relacion muchos a uno
     public function tickets(){
        return $this->belongsToMany(tickets::class);
     }

}
