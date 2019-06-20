<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDossiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('patient_id')->unsigned();
            $table->string('sexe')->nullable();
            $table->integer('tel_personne_contact')->nullable();
            $table->string('personne_contact')->nullable();
            $table->string('profession')->nullable();
            $table->string('adresse')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->date('date_naissance')->nullable();

            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
}
