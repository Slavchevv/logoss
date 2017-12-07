<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvtorsIdToUploads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      /*  Schema::table('uploads', function($table){
            $table->integer('avtor_id')->unsigned();
        });

        Schema::table('uploads', function($table) {
            $table->foreign('avtor_id')->references('id')->on('avtors');
        });*/
        //
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
