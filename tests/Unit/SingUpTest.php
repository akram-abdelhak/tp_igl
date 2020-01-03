<?php

namespace Tests\Unit;
use App\User as user; 
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;

class SingUpTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = factory(user::class)->create();
       $this->assertDatabaseHas('users', [
           'email' => $user->email ] ) ; 
       
    }
}
