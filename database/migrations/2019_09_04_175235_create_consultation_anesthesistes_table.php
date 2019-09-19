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
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('patient_id')->index();
            $table->text('anesthesi_salle');
            $table->text('risque');
            $table->string('technique_anesthesie');
            $table->text('synthese_preop');
            $table->date('date_hospitalisation')->nullable();
            $table->string('service')->nullable();
            $table->string('classe_asa')->nullable();
            $table->text('antecedent_traitement');
            $table->text('examen_clinique');
            $table->text('information_patient');
            $table->text('allergie')->nullable();
            $table->text('traitement_en_cours');
            $table->text('examen_paraclinique')->nullable();
            $table->string('intubation')->nullable();
            $table->string('mallampati')->nullable();
            $table->string('distance_interincisive')->nullable();
            $table->string('distance_thyromentoniere')->nullable();
            $table->string('mobilite_servicale')->nullable();
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
