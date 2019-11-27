<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('etudiant_id')->unique() ; 
            $table->foreign('etudiant_id')->references('id')->on('users');
            $table->boolean('inscrit')->default(false)  ;
            $table->string('firstName') ; 
            $table->string('lastName') ;
            $table->string('email')->unique() ; 
            $table->string('matricule') ; 
            $table->string('address') ;
            $table->string('city') ;
            $table->string('Numero') ; 
            $table->string('codepostal') ; 
            $table->string('AnnéeEtude') ; 
            $table->string('photo') ; 
            $table->string('file1') ; 
            $table->string('file2') ; 


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
