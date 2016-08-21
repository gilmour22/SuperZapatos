<?php

namespace SuperZapatos\Http\Controllers;

use Illuminate\Http\Request;
use SuperZapatos\Http\Requests;
use DB;
use Illuminate\Http\Response;

class ServicesController extends Controller
{
    public function DevuelveTiendas() {
      $tiendas = \SuperZapatos\Tienda::All();
      if (!$tiendas) {
        return response()->json(['error_msg'=>'No records found', 'error_code'=>'404', 'success'=>false], 404);
      }
      if ($tiendas->count()>1) $RESP = 'stores';
      else $RESP='store';
      return response()->json([$RESP=>$tiendas, 'success'=>true,'total_elements'=>$tiendas->count()],200);
    }
    public function DevuelveArticulos() {
      $productos = \SuperZapatos\Producto::All();
      if (!$productos) {
        return response()->json(['error_msg'=>'No records found', 'error_code'=>'404', 'success'=>false], 404);
      }
      if ($productos->count()>1) $RESP = 'articles';
      else $RESP='article';

      return response()->json([$RESP=>$productos, 'success'=>true,'total_elements'=>$productos->count()],200);
    }
    public function DevuelveArticulosEnTienda($id) {
      //$productos = \SuperZapatos\Producto::where('store_id', $id)->get();
      if (is_numeric($id)) {
        $productos = DB::table('articles')
                  -> select('articles.id', 'articles.name', 'articles.description', 'articles.price', 'articles.total_in_shelf','articles.total_in_vault', 'articles.store_id', 'stores.name as store_name')
                  -> leftJoin('stores', 'articles.store_id','=', 'stores.id')
                  -> where('store_id', $id);

        if (!$productos-> get()) {
          return response()->json(['error_msg'=>'Record not Found', 'error_code'=>'404', 'success'=>false], 404);
        }
        if ($productos->count()>1) $RESP = 'articles';
        else $RESP='article';
        return response()->json([$RESP=>$productos-> get(), 'success'=>true,'total_elements'=>$productos->count()],200);
      } else {
        return response()->json(['error_msg'=>'Bad Request', 'error_code'=>'400', 'success'=>false], 400);
      }
    }

}
