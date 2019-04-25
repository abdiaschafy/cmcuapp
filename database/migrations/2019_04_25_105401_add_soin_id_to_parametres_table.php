<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSoinIdToParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parametres', function (Blueprint $table) {
            $table->integer('soin_id')->unsigned()->nullable()->after('id');
            $table->foreign('soin_id')->references('id')->on('soins')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parametres', function (Blueprint $table) {
            $table->dropColumn('soin_id');
        });
    }
}
