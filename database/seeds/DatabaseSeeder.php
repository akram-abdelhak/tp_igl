<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\AdminsTableSeede ; 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('userTableSeeder');
         $this->call('AbsenceTableSeeder');
    }
}
