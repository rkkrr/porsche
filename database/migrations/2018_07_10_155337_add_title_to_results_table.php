<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTitleToResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->integer('q4');
            $table->integer('q5');
            $table->integer('q6');
            $table->integer('q7');
            $table->integer('q8');
            $table->integer('q9');
            $table->integer('q10');
            $table->integer('q11');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
           $table->dropColumn('q4');
           $table->dropColumn('q5');
           $table->dropColumn('q6');
           $table->dropColumn('q7');
           $table->dropColumn('q8');
           $table->dropColumn('q9');
           $table->dropColumn('q10');
           $table->dropColumn('q11');
        });
    }
}
