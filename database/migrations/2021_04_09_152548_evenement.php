<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Evenement extends Migration
{
    public function up()
    {
        Schema::create('evenement', function (Blueprint $table) {
           $table->increments('id_event');
            $table->string('nom_event');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->string('description_event');
            $table->string('type');
            $table->string('localisation');
            $table->string('nom_asso');
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('association');
    }
}
