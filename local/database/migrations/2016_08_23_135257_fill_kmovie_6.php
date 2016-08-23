<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillKmovie6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('k_movies')->insert(
            ['order' => 9,
            'title' => 'Seven',
            'real_name' => 'David Fincher',
            'release_date' => '1995-09-22',
            'duration' => '02:07:00',
            'image' => 'img/seven.jpg' 
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
