<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConsultationIdToSoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('soins', function (Blueprint $table) {
            $table->integer('consultation_id')->unsigned()->nullable()->after('id');
            $table->foreign('consultation_id')->references('id')->on('consultations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('soins', function (Blueprint $table) {
            $table->dropColumn('consultation_id');
        });
    }
}
