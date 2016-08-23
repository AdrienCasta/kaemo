<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertDataKmovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('k_movies')->insert(
            array(
                'order' => 2,
                'title' => 'Deadpool',
                'real_name' => 'Tom Miller',
                'release_date' => '2016-02-20',
                'duration' => '01:57:00',
                'avatar' => 'img/deadpool.jpg' 
            ),
            array(
                'order' => 3,
                'title' => 'Star Wars',
                'real_name' => 'John Doe',
                'release_date' => '2015-12-10',
                'duration' => '02:30:00',
                'avatar' => 'img/starwars.jpg' 
            ),
            array(
                'order' => 4,
                'title' => 'Dernier train pour Busan',
                'real_name' => 'Jonh Doe',
                'release_date' => '2016-08-17',
                'duration' => '01:57:00',
                'avatar' => 'img/busan.jpg' 
            )
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
