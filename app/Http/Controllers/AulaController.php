<?php

namespace App\Http\Controllers;
use App\Models\aula;


use Illuminate\Http\Request;

class AulaController extends Controller
{

    public function index(){
        $aulas = aula::all();
        return view('Escuela01.index', compact('aulas'));
    }


    public function create(){
        return view('Escuela01.create');
    }

    public function store(Request $request){
        $aulas = new aula();
        $aulas->codigo = $request->codigo;
        $aulas->piso = $request->piso;
        $aulas->pupitres = $request->pupitres;
        $aulas->save();

        return redirect()->route('escuela22.create');  ///
    }

    public function show($id){
        $aulas = aula::find($id);
        return view('Escuela01.show', compact('aulas'));
    }

    public function edit($id){
        $aulas = aula::find($id);
        return view('Escuela01.edit', compact('aulas'));
    }

    public function update(Request $request, aula $aulas){
        $aulas->update($request->all());
        return redirect()->route('escuela22.index');
    }

   public function destroy($id){

    $aulas = aula::findOrFail($id);
    $aulas->delete();
    return redirect()->route('escuela22.index');
   }
}