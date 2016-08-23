<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillKmovie5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           DB::table('k_movies')->insert(
            ['order' => 8,
            'title' => 'Fight Club',
            'real_name' => 'David Fincher',
            'release_date' => '1999-09-10',
            'duration' => '02:19:00',
            'image' => 'img/fight-club.jpg' 
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
