<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use Input;

class AjaxController extends Controller
{
    function updateOrder(Request $request){
        if($request->ajax()) {
            
            $movies = $request->input();
            
            foreach($movies['order'] as $movie){
                DB::table('k_movies')
                    ->where('id', $movie['id'])
                    ->update(['order' => $movie['position']]);
            }
        }
    }
}
    