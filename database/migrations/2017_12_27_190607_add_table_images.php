<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create('images', function (Blueprint $table) {

            /*$table->increments('id');
            $table->integer('avtor_id')->unsigned();
            $table->foreign('avtor_id')->references('id')->on('avtors');*/

     //   });
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
