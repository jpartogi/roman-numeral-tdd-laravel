<?php

namespace Tests\Unit;

use Tests\TestCase;

class ConverterTest extends TestCase
{
    public function testI()
    {
        $response = $this->get('/api/convert?number=I');

        $response->assertJson([
            'result' => 1,
        ]);
    }

    public function testV()
    {
        $response = $this->get('/api/convert?number=V');

        $response->assertJson([
            'result' => 5,
        ]);
    }

    public function testX()
    {
        $response = $this->get('/api/convert?number=X');

        $response->assertJson([
            'result' => 10,
        ]);
    }

    public function testL()
    {
        $response = $this->get('/api/convert?number=L');

        $response->assertJson([
            'result' => 50,
        ]);
    }

    public function testC()
    {
        $response = $this->get('/api/convert?number=C');

        $response->assertJson([
            'result' => 100,
        ]);
    }

    public function testD()
    {
        $response = $this->get('/api/convert?number=D');

        $response->assertJson([
            'result' => 500,
        ]);
    }

    public function testM()
    {
        $response = $this->get('/api/convert?number=M');

        $response->assertJson([
            'result' => 1000,
        ]);
    }
}