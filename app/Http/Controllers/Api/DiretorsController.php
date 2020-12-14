<?php

namespace App\Http\Controllers\Api;

use App\Diretor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiretorsController extends Controller
{
    public function index(){
        $diretors = Diretor::get();
        return response()->json($diretors);
    }

    public function store(Request $request){
        $diretorData = new Diretor;
        $diretorData->create($request->all());
    }

    public function update(Request $request, $id){
        $diretorUpdate = Diretor::findOrFail($id);
        $diretorUpdate->update($request->all());
        return response()->json($diretorUpdate);
    }
}
