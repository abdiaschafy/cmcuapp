<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompteRenduBlocOperatoiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte_rendu_bloc_operatoires', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id')->index();
            $table->string('chirurgien');
            $table->string('anesthesiste');
            $table->date('date_intervention');
            $table->time('dure_intervention');
            $table->text('compte_rendu_o');
            $table->text('resultat_histo');
            $table->text('suite_operatoire');
            $table->text('traitement_propose');
            $table->text('soins');
            $table->text('conclusion');
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
        Schema::dropIfExists('compte_rendu_bloc_operatoires');
    }
}
