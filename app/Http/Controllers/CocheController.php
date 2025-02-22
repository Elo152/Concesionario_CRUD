<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;

class CocheController extends Controller{
   
    public function index(){
        $coches = Coche::all();
        return view('index', compact('coches'));
    }

   
    public function create(){
        return view('registrar');
    }

    
    public function store(Request $request){
        Coche::create($request->all());
        return redirect()->route('index');
    }

  
    public function show($id){
        $coche = Coche::findOrFail($id);
        return view('mostrar', compact('coche'));
    }

   
    public function edit($id){
        $coche = Coche::findOrFail($id);
        return view('editar', compact('coche'));
    }



    public function update(Request $request, $id){
        $coche = Coche::findOrFail($id);
        $coche->update($request->all());
        return redirect()->route('mostrar', $coche->id);
    }

    
    public function destroy($id){
        $coche = Coche::findOrFail($id);
        $coche->delete();
        return redirect()->route('index', $coche->id);
    }
}
