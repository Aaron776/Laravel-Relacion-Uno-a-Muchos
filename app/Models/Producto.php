<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public function categorias(){
        return $this->belongsTo(Categoria::class,'id_categoria'); // aquie estamos diciendo que un producto va a pertenecer a una categoria
    }
}
