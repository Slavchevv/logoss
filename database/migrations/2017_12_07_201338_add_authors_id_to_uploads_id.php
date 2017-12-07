<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorsIdToUploadsId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
     /*   Schema::table('authors', function($table){
            $table->integer('author_id')->unsigned();
        });

        Schema::table('authors', function($table) {
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
        /*Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });*/
    }
}
