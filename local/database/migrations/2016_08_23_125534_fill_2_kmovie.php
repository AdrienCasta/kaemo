<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fill2Kmovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          DB::table('k_movies')->insert(
           ['order' => 3,
            'title' => 'Star Wars',
            'real_name' => 'John Doe',
            'release_date' => '2015-12-10',
            'duration' => '02:30:00',
            'avatar' => 'img/starwars.jpg' 
            ],
            ['order' => 4,
            'title' => 'Dernier train pour Busan',
            'real_name' => 'Jonh Doe',
            'release_date' => '2016-08-17',
            'duration' => '01:57:00',
            'avatar' => 'img/busan.jpg' 
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
