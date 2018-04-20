<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GamesTableAddSomeCoulums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games',function (Blueprint $table){
            $table->integer('golden_s_id')->nullable();
            $table->string('golden_name_s')->nullable();
            $table->integer('silver_s_id')->nullable();
            $table->string('silver_name_s')->nullable();
            $table->integer('bronze_s_id')->nullable();
            $table->string('bronze_name_s')->nullable();
        });
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
