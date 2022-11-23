<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\aeropuerto;


class AeropuertoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $aeropuerto = new aeropuerto();
        $aeropuerto->nombre = "Juan Santamaria"
        $aeropuerto->save();
        $this->assertEquals("Juan Santamaria", $aeropuerto->nombre);

    }
}
