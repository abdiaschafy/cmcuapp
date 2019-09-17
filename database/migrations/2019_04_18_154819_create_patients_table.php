<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('numero_dossier')->unique();
            $table->string('name')->unique();
            $table->string('assurance')->nullable();
            $table->string('numero_assurance')->nullable();
            $table->string('prise_en_charge')->nullable();
            $table->integer('montant')->nullable();
            $table->integer('avance')->nullable();
            $table->integer('reste')->nullable();
            $table->integer('reste1')->nullable();
            $table->integer('assurancec')->nullable();
            $table->integer('assurec')->nullable();
            $table->string('demarcheur')->nullable();
            $table->string('motif')->nullable();
            $table->string('prenom')->nullable();
            $table->date('date_insertion')->nullable();


            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
