<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUfcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ufcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_ufc');
            $table->string('email_ufc');
            $table->text('biblio_ufc')->nullable();
            $table->string('photo');
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
        Schema::dropIfExists('ufcs');
    }
}
