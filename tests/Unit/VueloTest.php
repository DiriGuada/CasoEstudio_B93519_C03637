<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\vuelos;


class VueloTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $vuelo = new vuelos();
        $vuelo->numero_vuelo = 1;
        $vuelo->idAeropuertoSalida = 1;
        $vuelo->idAeropuertoLlegada= 2;
        $vuelo->idAvion = 1;
        $vuelo->save();
        $this->assertEquals(1, $vuelo->numero_vuelo);
       

    }
}
