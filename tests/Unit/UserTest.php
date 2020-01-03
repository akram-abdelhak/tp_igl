<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLogin()
    {
     
        $response = $this->postJson('/api/login', ['email' => 'ha_akli@esi.dz', 'password'=>'amelakli']);

        $response
            ->assertJson([
                'success' => true,
            ]);
    }
}
