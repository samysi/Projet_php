<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Etudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 30);
            $table->string('prenom', 30);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->date('date_naissance');
            $table->string('adresse');
            $table->integer('telephone');
            $table->timestamps();
            $table->rememberToken();
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
