<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom')->default('nom');
            $table->string('prenom')->default('prenom');
            $table->string('groupe')->default('00');
            $table->string('email')->unique()->default('email');;
            $table->string('password')->default('password');
            $table->string('dateNA')->default('dateNA');
            $table->string('lieuNA')->default('lieuNA');
            
            $table->boolean('permute')->default(0);

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
        Schema::dropIfExists('etudiants');
    }
}
