<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oracion extends Model
{
    use HasFactory;
    public $palabras = [];
    public function agregarPalabra(string $palabra) {
        $this->palabras = $palabra;
    }


}
