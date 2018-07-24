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
        Schema::create('user_invite', function (Blueprint $table) {
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

    public function down()
    {
        Schema::dropIfExists('user_invite');
    }
}