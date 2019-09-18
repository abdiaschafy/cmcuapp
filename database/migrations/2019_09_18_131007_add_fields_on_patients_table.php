<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsOnPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->integer('reste1')->nullable();
            $table->integer('reste')->nullable();
            $table->integer('assurancec')->nullable();
            $table->integer('assurec')->nullable();
            $table->string('demarcheur')->nullable();
            $table->string('motif')->nullable();
            $table->string('prenom')->nullable();
            $table->date('date_insertion')->nullable();
            $table->integer('montant')->nullable();
            $table->integer('avance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('reste1');
            $table->dropColumn('reste');
            $table->dropColumn('assurancec');
            $table->dropColumn('assurec');
            $table->dropColumn('demarcheur');
            $table->dropColumn('prenom');
            $table->dropColumn('date_insertion');
            $table->dropColumn('montant');
            $table->dropColumn('avance');

        });
    }
}
