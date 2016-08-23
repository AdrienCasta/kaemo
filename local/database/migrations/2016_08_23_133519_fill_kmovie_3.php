<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillKmovie3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::table('k_movies')->insert(
            ['order' => 6,
            'title' => 'Le Voyage de Chihiro',
            'real_name' => 'Hayao Miyazaki',
            'release_date' => '2001-07-27',
            'duration' => '02:05:00',
            'image' => 'img/Le-Voyage-de-Chihiro.jpg' 
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
