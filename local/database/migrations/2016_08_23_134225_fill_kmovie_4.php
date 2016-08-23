<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillKmovie4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('k_movies')->insert(
            ['order' => 7,
            'title' => 'Le Tombeau des lucioles',
            'real_name' => 'Hotaru no Haka',
            'release_date' => '1988-04-16',
            'duration' => '01:29:00',
            'image' => 'img/tombeau-des-lucioles.jpg' 
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
