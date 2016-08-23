<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKmoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('k_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('order');
            $table->string('title');
            $table->string('real_name');
            $table->date('release_date');
            $table->time('duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('k_movies');
    }
}
