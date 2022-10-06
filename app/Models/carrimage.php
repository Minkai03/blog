<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrimage extends Model
{
    use HasFactory;

     //uno a muchos
     public function p_images(){
        return $this->hasmany(p_images::class);
     }

     //uno a muchos
     public function b_images(){
        return $this->hasmany(b_images::class);
     }
}
