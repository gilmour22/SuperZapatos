<?php

namespace SuperZapatos\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use SuperZapatos\Http\Requests;
use Illuminate\Support\Facades\Route;

class TiendaController extends Controller
{
    public function index() {
      $tiendas = \SuperZapatos\Tienda::All();
      return view('tienda.index', compact('tiendas'));

    }
    public function create() {
      return view('tienda.create');
    }
    public function store(Request $request) {
      \SuperZapatos\Tienda::create([
        'name'=>$request['tienda'],
        'address'=>$request['direccion']
      ]);

      return redirect('/tienda')->with('message', 'Usuario agregado.');
    }

    public function edit($id){
      $tienda=\SuperZapatos\Tienda::find($id);
      return view('tienda.edit',['tienda'=>$tienda]);
    }

    public function update($id, Request $request){
      $tienda=\SuperZapatos\Tienda::find($id);
      $tienda->fill($request->all());
      $tienda->save();
      return redirect('/tienda')->with('message', 'Usuario editado.');
    }

    public function destroy($id) {
      $tienda=\SuperZapatos\Tienda::find($id);
      $tienda->destroy($id);
      return redirect('/tienda')->with('message', 'Usuario eliminado de base de datos.');
    }
}
