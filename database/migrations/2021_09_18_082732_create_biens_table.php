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
            $table->integer('chambre')->nullable();
            $table->integer('sejour')->nullable();
            $table->integer('wc')->nullable();
            $table->integer('cuisine')->nullable();
            $table->integer('salle_manger')->nullable();
            $table->integer('garage')->nullable();
            $table->text('description');
            $table->integer('prix');
            $table->string('echeance')->nullable();
            $table->unsignedBigInteger('quatier_id');
            $table->foreign('quatier_id')->references('id')->on('quatiers');
            $table->unsignedBigInteger('etat_id');
            $table->foreign('etat_id')->references('id')->on('etats');
            $table->string('photo');
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
