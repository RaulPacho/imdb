<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string("titulo")-> default(""); 
            $table->text("descripcion")-> default("");
            $table->unsignedBigInteger("dir_id") -> default(1);
            $table->foreign("dir_id")->references("id")->on("directors");
            $table->unsignedBigInteger("act_id")-> default(1) ;
            $table->foreign("act_id")->references("id")->on("actors");
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
        Schema::dropIfExists('peliculas');
    }
}
