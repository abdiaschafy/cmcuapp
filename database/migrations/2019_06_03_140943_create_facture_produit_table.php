<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_produit', function (Blueprint $table) {

            $table->primary(['facture_id', 'produit_id']);

            $table->unsignedInteger('facture_id');
            $table->unsignedInteger('produit_id');
            $table->integer('qte');
            $table->integer('prix');
            $table->integer('prix_total');
            $table->timestamps();

//            $table->foreign('facture_id')->references('id')->on('factures')->onDelete('cascade')->onUpdate('cascade');
//            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facture_produit');
    }
}
