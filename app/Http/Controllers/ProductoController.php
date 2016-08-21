<?php

namespace SuperZapatos\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use SuperZapatos\Http\Requests;

class ProductoController extends Controller
{
  public function index() {
    //$productos = \SuperZapatos\Producto::All();
    $productos = DB::table('articles')
              -> select('articles.id', 'articles.name', 'articles.description', 'articles.price', 'articles.total_in_shelf','articles.total_in_vault', 'articles.store_id', 'stores.name as store')
              -> leftJoin('stores', 'articles.store_id','=', 'stores.id')
              -> get();
    return view('producto.index', compact('productos'));

  }
  public function create() {
    $tiendas = \SuperZapatos\Tienda::lists('name', 'id');
    return view('producto.create', compact('tiendas'));
  }
  public function store(Request $request) {
    \SuperZapatos\Producto::create([
      'name'=>$request['name'],
      'description'=>$request['description'],
      'price'=>$request['price'],
      'total_in_shelf'=>$request['total_in_shelf'],
      'total_in_vault'=>$request['total_in_vault'],
      'store_id'=>$request['store_id'],
    ]);

    return redirect('/producto')->with('message', 'Producto agregado.');
  }

  public function edit($id){
    $producto=\SuperZapatos\Producto::find($id);
    $tiendas = \SuperZapatos\Tienda::lists('name', 'id');
    return view('producto.edit', compact('producto', 'tiendas'));
  }

  public function update($id, Request $request){
    $producto=\SuperZapatos\Producto::find($id);
    $producto->fill($request->all());
    $producto->save();
    return redirect('/producto')->with('message', 'Producto editado.');
  }

  public function destroy($id) {
    $producto=\SuperZapatos\Producto::find($id);
    $producto->destroy($id);
    return redirect('/producto')->with('message', 'Producto eliminado de base de datos.');
  }
}
