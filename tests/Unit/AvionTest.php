<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\aviones;


class AvionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $avion = new aviones();
        $avion->recorido_Vuelos = 1;
        $avion->idCompania = 1;
        $avion->save();
        $this->assertEquals(1,  $avion->recorido_Vuelos);
        

    }
}
