<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('class');
            $table->integer('golden_id')->nullable();
            $table->string('golden_name')->nullable();
            $table->integer('silver_id')->nullable();
            $table->string('silver_name')->nullable();
            $table->integer('bronze_id')->nullable();
            $table->string('bronze_name')->nullable();
            $table->timestamp('begins_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
