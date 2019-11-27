<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Absences extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('etudiant_id') ; 
            $table->foreign('etudiant_id')->references('id')->on('users');
            $table->string('niveau') ;
            $table->string('groupe') ;
            $table->string('module') ;
            $table->dateTime('dateD') ;
            $table->dateTime('dateF') ;
            $table->string('justificatif') ; 
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
