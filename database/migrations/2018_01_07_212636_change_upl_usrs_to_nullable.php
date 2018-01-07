<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUplUsrsToNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* $table->foreign('upload_id')->references('id')->on('uploads');

        $table->foreign('user_id')->references('id')->on('users');
        $table->string('name', 50)->nullable()->change();
    */
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
