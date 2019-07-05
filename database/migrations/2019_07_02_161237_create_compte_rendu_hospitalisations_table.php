<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompteRenduHospitalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_rendu_hospitalisations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id')->index();
            $table->text('traitement_sortie');
            $table->string('suite_operatoire');
            $table->text('sortie');
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
        Schema::dropIfExists('compte_rendu_hospitalisations');
    }
}
