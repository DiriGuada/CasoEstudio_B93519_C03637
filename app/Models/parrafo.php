<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parrafo extends Model
{
    use HasFactory;
    public oracion $oracion;
    public function __construct(oracion $oraciones) {
        $this->oracion = $oraciones;
    }
}
