<?php

namespace App\Http\Controllers;
use App\Models\Perro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerroController extends Controller
{ 
    public function index(){
 
         $perros = Perro::all();
 
         $title = "Listado de Perros";
 
         return view('Perros.index', compact('perros', 'title') );
     }
 
     public function show($id){
 
         $perro= Perro::findOrFail($id);
 
         return view('Perros/show', compact('perro'));
     }
 
     public function create(){
         return view('Perros/create');
     }
 
     public function edit($id){
 
         $perro = Perro::find($id);
         return view('Perros/edit')->with('perro', $perro);
     }
 
     public function updatePerro(Request $request){
 
         $perro = Perro::find($request->id);
         $perro->name         =   $request->nombre;
         $perro->imgurl         =   $request->imagen;
    $perro->descripcion        =   $request->descripcion;
       
         $perro->save();
 
         return redirect()->route('ver', $perro->id);
     }
 
 
     public function store(Request $request){
 
         $data = request()->validate([
            'nombre'      => 'required',
            'imagen'      => 'required',
             
             'descripcion'      => 'required',
         ], [
            'nombre.required'     => 'El campo nombre es obligatorio',
            'imagen.required'     => 'El campo nombre es obligatorio',
             'descripcion.required'     => 'El campo descripcion es obligatorio',
         ]);
 
         $perro               =   new Perro();
         $perro->name         =   $request->nombre;
         $perro->imgurl         =   $request->imagen;
         $perro->descripcion        =   $request->descripcion;
         $perro->save();
 
         return redirect()->route('ver', $perro->id);
 
 
     }
 
     public function destroy($id){
         Perro::where('id', $id)->delete();
         return redirect()->route('todos');
     }
}
