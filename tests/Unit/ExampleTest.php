<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function BasicTest()
    {
       $response =  $this->call('GET', '/');

        $this->assertStatus(200);
       
        $response->dumpHeaders();

        $response->dump();
    }
}
