<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillKmovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          DB::table('k_movies')->insert(
            ['order' => 4,
            'title' => 'Dernier train pour Busan',
            'real_name' => 'Jonh Doe',
            'release_date' => '2016-08-17',
            'duration' => '01:57:00',
            'image' => 'img/busan.jpg' 
            ]
              );
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
