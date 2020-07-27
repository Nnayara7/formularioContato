<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FormularioTest extends TestCase
{
    /** @test*/
    public function fomularioTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
