<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguirs', function (Blueprint $table) {
            $table->id();
            $table->string('who');
            $table->string('name_user')->nullable();
            $table->string('name_prof')->nullable();
            $table->string('email_user')->nullable();
            $table->string('email_prof')->nullable();;
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
        Schema::dropIfExists('seguirs');
    }
}
