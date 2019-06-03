<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit_facture', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('produit_id')->index();
            $table->unsignedInteger('facture_id')->index();
            $table->integer('qte');
            $table->integer('prix');
            $table->integer('prix_total');
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
        Schema::dropIfExists('produit_facture');
    }
}
