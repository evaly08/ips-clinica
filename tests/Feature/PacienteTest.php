<?php

namespace Tests\Feature;

use Tests\TestCase;

class PacienteTest extends TestCase
{
    public function test_la_aplicacion_responde(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}