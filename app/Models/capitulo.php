<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class capitulo extends Model
{
    use HasFactory;
    public parrafo $parrafo;
    public function __construct(parrafo $parrafos) {
        $this->parrafo = $parrafos;
    }
}
