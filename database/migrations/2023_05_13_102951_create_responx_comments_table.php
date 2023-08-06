<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponxCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responx_comments', function (Blueprint $table) {
            $table->id();
            $table->text('reponse');
            $table->string('namo')->nullable();
            $table->string('profile')->nullable();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_prof')->unsigned();
            $table->foreign('id_prof')->references('id')->on('professeurs')->onDelete('cascade');
            $table->integer('id_commentaire')->unsigned();
            $table->foreign('id_commentaire')->references('id')->on('commentaires')->onDelete('cascade');
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
        Schema::dropIfExists('responx_comments');
    }
}