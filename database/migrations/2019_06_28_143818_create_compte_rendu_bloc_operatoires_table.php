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
            $table->text('detail_intervention');
            $table->string('chirurgien');
            $table->string('anesthesiste')->nullable();
            $table->integer('cout')->nullable();
            $table->time('dure_intervention');
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
