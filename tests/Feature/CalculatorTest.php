<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalculatorTest extends TestCase
{
    public function testBasic()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
