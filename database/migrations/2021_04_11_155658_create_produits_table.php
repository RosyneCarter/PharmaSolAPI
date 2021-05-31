<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('forme_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->foreignId('categorie_id')->constrained();
            $table->foreignId('prix_id')->constrained();
            $table->string('Numéro_Lot')->nullable();
            $table->date('date_Exp');
            $table->string('Nom_Commercial')->nullable();
            $table->string('Quantité')->nullable();
            $table->string('Emplacement')->nullable();
            $table->string('Dosage')->nullable();
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
        Schema::dropIfExists('produits');
    }
}
