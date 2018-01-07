<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFksToPoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //Schema::table('points', function (Blueprint $table) {

           /*  $table->foreign('user_id')->references('id')->on('users');*/

     // });
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
