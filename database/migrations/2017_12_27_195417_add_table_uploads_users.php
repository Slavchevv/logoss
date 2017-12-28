<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableUploadsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    /*    Schema::create('upload_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('upload_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('type')->unsigned();
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
