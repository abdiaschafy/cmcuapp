<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveillanceRapprocheParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveillance_rapproche_parametres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_patient');
            $table->string('age_patient');
            $table->string('infirmier');
            $table->string('indication_chirurgicale');
            $table->string('intevention');
            $table->dateTime('date_heure');
            $table->string('ta');
            $table->string('fr');
            $table->integer('pouls');
            $table->integer('spo2');
            $table->integer('temperature');
            $table->string('diurese');
            $table->string('conscience');
            $table->string('douleur');
            $table->string('observation_plainte');
            $table->string('type');
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
        Schema::dropIfExists('surveillance_rapproche_parametres');
    }
}
