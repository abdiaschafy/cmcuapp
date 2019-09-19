<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsOnConsultationAnesthesistesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consultation_anesthesistes', function (Blueprint $table) {
            $table->string('specialite')->nullable();
            $table->string('medecin_traitant')->nullable();
            $table->string('operateur')->nullable();
            $table->date('date_intervention')->nullable();
            $table->string('motif_admission')->nullable();
            $table->text('memo')->nullable();
            $table->string('jeune_preop')->nullable();
            $table->string('autre1')->nullable();
            $table->string('antibiotique')->nullable();
            $table->string('technique_anesthesie1')->nullable();
            $table->text('solide')->nullable();
            $table->text('liquide')->nullable();
            $table->text('benefice_risque')->nullable();
            $table->text('adaptation_traitement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consultation_anesthesiste', function (Blueprint $table) {
            //
        });
    }
}
