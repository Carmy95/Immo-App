<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->integer('superficie');
            $table->integer('chambre');
            $table->integer('sejour');
            $table->integer('wc');
            $table->integer('cuisine');
            $table->integer('salle_manger');
            $table->integer('garage');
            $table->text('description');
            $table->integer('prix');
            $table->string('echeance')->nullable();
            $table->unsignedBigInteger('quatier_id');
            $table->foreign('quatier_id')->references('id')->on('quatiers');
            $table->unsignedBigInteger('etat_id');
            $table->foreign('etat_id')->references('id')->on('etats');
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
        Schema::dropIfExists('biens');
    }
}
