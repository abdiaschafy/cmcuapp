<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('patient_id')->index();
            $table->integer('numero');
            $table->string('motif');
            $table->string('montant');
            $table->string('avance')->nullable()->default('00');
            $table->string('reste')->nullable()->default('15000');
            $table->string('reste1')->nullable();
            $table->string('demarcheur')->nullable();
            $table->string('prenom')->nullable();
            $table->date('date_insertion');
            
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
        Schema::dropIfExists('facture_consultations');
    }
}
