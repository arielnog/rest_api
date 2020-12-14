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

    public function update(Request $request, $id){
        $moviesTest = $request->all();
        $movies = Movies::find($id);
        $movies->update($moviesTest);
        return response()->json();

    }
    public function delete($id){
        Movies::destroy($id);
        return response()->json();

    }
}
