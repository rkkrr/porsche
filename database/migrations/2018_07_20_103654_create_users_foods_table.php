<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_foods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_in_users')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();
            
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             
             $table->unique(['user_id', 'id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_foods');
    }
}
