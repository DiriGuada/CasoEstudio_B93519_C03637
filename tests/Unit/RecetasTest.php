<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\recetas;

class RecetasTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $receta = new recetas();
        $receta->titulos= "Arros Cantones";
        $receta->porciones = 1;
        $receta->intrucciones= 2;
        $receta->save();
        $this->assertEquals("Arros Cantones", $receta->titulos);
    
    }
}
