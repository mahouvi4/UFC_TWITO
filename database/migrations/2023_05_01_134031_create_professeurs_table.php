<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professeurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_prof');
            $table->string('email_prof');
            $table->string('photo')->nullable();
            $table->text('bio');
            $table->string('password');
            $table->string('securty_code');
            $table->string('statut')->default(1);
            $table->integer('id_ufc')->unsigned();
            $table->foreign('id_ufc')->references('id')->on('ufcs')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('professeurs');
    }
}