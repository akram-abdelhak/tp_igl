<?php

use Illuminate\Database\Seeder;

class AbsenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\absence::class , 10)->create() ; 
    }
}
