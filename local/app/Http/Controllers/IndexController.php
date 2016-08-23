<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;

class IndexController extends Controller
{
    function index()
    {
        setlocale(LC_TIME, "fr_FR"); 
        
        $data = DB::table('k_movies')
            ->orderBy('order')
            ->get();
        $movies = [];
        $i = 0;
        foreach($data as $movie){
            
            // HH:MM:SS to mm
            $duration = explode(":", $movie->duration);
            
            $hh = $duration[0];
            $mm = $duration[1];
            
            $minutes = $hh*60 + $mm;
            
            $movies[$i]['id'] = $movie->id;
            $movies[$i]['order'] = $movie->order;
            $movies[$i]['title'] = $movie->title;
            $movies[$i]['real_name'] = $movie->real_name;
            $movies[$i]['release_date'] = date("d/m/Y",strtotime($movie->release_date));
            $movies[$i]['duration'] = $minutes.' minutes';
            $movies[$i]['image'] = $movie->image;
            
            $i++;
        }
        //dd(date("d/m/Y",strtotime($movie->release_date)));
        return view("movies",['movies' => $movies]);
    }
}
