<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToUploads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('uploads', function($table){
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
    });*/

/*    Schema::table('uploads', function($table){
        $table->integer('user_id')->unsigned();
    });

Schema::table('uploads', function($table) {
    $table->foreign('user_id')->references('id')->on('users');
});*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       /* Schema::table('uploads',function($table){
            $table->dropColumn('user_id');
        });

        Schema::table('uploads', function($table) {
            $table->dropColumn('user_id')->references('id')->on('users');
        });*/

        //
    }
}
