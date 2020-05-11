<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dossier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossier', function (Blueprint $table) {
            $table->increments('id_dossier');
            $table->string('cv');
            $table->string('lettre');
            $table->string('relever_note');
            $table->string('imprime_ecran');
            $table->string('formulaire_inscription');
            $table->string('email')->unique();
            $table->integer('statut')->unsigned();
            $table->integer('formation')->unsigned();
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
