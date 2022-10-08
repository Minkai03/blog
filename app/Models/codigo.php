<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class codigo extends Model
{
    use HasFactory;

    //relacion uno a uno
    public function ticket(){
        return $this->hasOne(ticket::class);
     }

}
