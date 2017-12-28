<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableFavorites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     /*   Schema::create('favorites', function (Blueprint $table) {

        $table->increments('id');

        $table->integer('user_id')->unsigned();

        //$table->foreign('user_id')->references('id')->on('user');

        $table->integer('upload_id')->unsigned();
        //$table->foreign('upload_id')->references('id')->on('upload');

           });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
