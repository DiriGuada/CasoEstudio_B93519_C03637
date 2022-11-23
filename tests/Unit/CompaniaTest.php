<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\compania;


class CompaniaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $compania = new compania();
        $compania->nombre = "DIRANA"
        $compania->save();
        $this->assertEquals("DIRANA", $compania->nombre);

    }
}
