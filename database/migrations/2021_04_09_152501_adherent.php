<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Adherent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherent', function (Blueprint $table) {
            $table->increments('id_user');
             $table->string('nom_user');
             $table->string('roleadherent');
             $table->string('email');
             $table->string('sexe');
             $table->foreignId(id_asso)->nullable()->constrained(association);
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
        Schema::dropIfExists('adherent');
    }
}
