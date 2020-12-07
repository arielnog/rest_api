<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index(){
        $movies = Movies::get();
        return response()->json($movies);
    }

    public function store(Request $request){
        $moviesData = new Movies;
        $moviesData->create($request->all());
    }
}
