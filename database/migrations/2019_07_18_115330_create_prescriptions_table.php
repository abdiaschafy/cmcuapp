<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id')->index()->nullable();
            $table->string('Hématologie')->nullable();
            $table->string('Hémostase')->nullable();
            $table->string('Biochimie')->nullable();
            $table->string('Hormonologie_Sérologie')->nullable();
            $table->string('Marqueurs_Tumoraux')->nullable();
            $table->string('Bactériologie_Parasitologie')->nullable();
            $table->string('Spermiologie')->nullable();
            $table->string('Urines')->nullable();
            $table->string('Sérologie')->nullable();
            $table->string('Examen')->nullable();
            $table->foreign('patient_id')->references('id')->on('patients');
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
        Schema::dropIfExists('prescriptions');
    }
}
