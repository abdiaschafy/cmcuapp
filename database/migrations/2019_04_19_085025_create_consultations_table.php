<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id')->index();
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('cout');
            $table->text('diagnostique');
            $table->text('commentaire');
            $table->text('antecedent_m')->nullable();
            $table->text('antecedent_c')->nullable();
            $table->string('decision')->nullable();
            $table->string('medecin');
            $table->text('allergie')->nullable();
            $table->string('groupe')->nullable();
            $table->text('examen_p')->nullable();
            $table->text('examen_c')->nullable();
            $table->text('traitement')->nullable();
            $table->text('motif')->nullable();
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
        Schema::dropIfExists('consultations');
    }
}
