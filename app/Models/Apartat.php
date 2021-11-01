<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartat extends Model
{
    use HasFactory;

    public function galeria(){
        return $this->hashOne(Galeria::class);
    }
}
