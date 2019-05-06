<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('numero');
            $table->string('categorie');
            $table->integer('prix');
            $table->boolean('statut')->default('1');
            $table->enum('type', ['CLASSIQUE', 'VIP', 'BLOC']);
            $table->enum('prix', ['2000', '10000']);

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });

    }
    public function down()
    {
        Schema::dropIfExists('chambres');
    }
}
