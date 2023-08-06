<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->string('auteur')->nullable();
            $table->string('profile')->nullable();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_prof')->unsigned();
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade');
            $table->integer('id_publication')->unsigned();
            $table->foreign('id_publication')->references('id')->on('publications')->onDelete('cascade');
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
        Schema::dropIfExists('commentaires');
    }
}