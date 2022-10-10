<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tache extends Migration
{
    public function up()
    {
       
    Schema::create('tache', function (Blueprint $table) {
         $table->increments('id_tache');
         $table->string('nom_description');
         $table->string('date_debut_tache');
         $table->string('date_fin_tache');
         $table->string('description_tache');
         $table->string('nom_user');
         $table->string('statu_tache');

     });
         
 }

 /**
  * Reverse the migrations.
  *
  * @return void
  */
 public function down()
 {
     Schema::dropIfExists('tache');
 }
}
