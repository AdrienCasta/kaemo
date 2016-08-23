<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillKmovie2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('k_movies')->insert(
            ['order' => 5,
            'title' => 'The Strangers',
            'real_name' => 'Na Hong-Jin	',
            'release_date' => '2016-07-06',
            'duration' => '02:36:00',
            'image' => 'img/the-strangers.jpg' 
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
