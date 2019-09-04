<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationAnesthesistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultation_anesthesistes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('anesthesi_salle');
            $table->longText('antecedent_traitement');
            $table->longText('examen_clinique');
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
        Schema::dropIfExists('consultation_anesthesistes');
    }
}
