<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privados', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->integer('decript_prof')->nullable();
            $table->integer('decript_user')->nullable();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_prof')->unsigned();
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade');
            $table->string('statut')->default(1);
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
        Schema::dropIfExists('privados');
    }
}
