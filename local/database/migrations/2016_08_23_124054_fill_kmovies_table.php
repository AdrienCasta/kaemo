1<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FillKmoviesTable extends Migration
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
