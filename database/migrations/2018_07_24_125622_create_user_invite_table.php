<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInviteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2018_07_24_125622_create_user_invite_table.php
       Schema::create('user_invite', function (Blueprint $table) {
=======
        Schema::create('user_invite', function (Blueprint $table) {
>>>>>>> 67828843429c525776d0cd23c2af3ee6b9b7257e:database/migrations/2018_07_23_154401_create_user_invite_table.php
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('invite_id')->unsigned()->index();
            $table->timestamps();

            // Foreign key setting
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('invite_id')->references('id')->on('users')->onDelete('cascade');

            // Do not allow duplication of combination of user_id and follow_id
            $table->unique(['user_id', 'invite_id']);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_invite');
    }
}
