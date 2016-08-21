@extends('layouts.master')

@section('content')

  {!! Form::model($producto,['route'=>['producto.update', $producto->id], 'method'=>'PUT']) !!}
  <div class="form-group">
    {!!Form::label('Producto')!!}
    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese Nombre del producto'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Descripcion')!!}
    {!!Form::text('description',null,['class'=>'form-control', 'placeholder'=>'Descripcion del producto'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Precio')!!}
    {!!Form::text('price',null,['class'=>'form-control', 'placeholder'=>'Precio de Venta'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('En Exhibicion')!!}
    {!!Form::text('total_in_shelf',null,['class'=>'form-control', 'placeholder'=>'Cantidad en Exhibicion'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('En Bodega')!!}
    {!!Form::text('total_in_vault',null,['class'=>'form-control', 'placeholder'=>'Cantidad en Bodega'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Tienda')!!}
    {!!Form::select('store_id', $tiendas, null,['class'=>'form-control']);!!}
  </div>



  {!!Form::submit('Editar',['class'=>'btn btn-primary', 'style'=>'float:left; margin:5px;'])!!}

  {!! Form::close() !!}

  {!! Form::open(['route'=>['producto.destroy', $producto->id], 'method'=>'DELETE']) !!}
    {!!Form::submit('Borrar',['class'=>'btn btn-danger', 'style'=>'float:left; margin:5px;'])!!}
  {!! Form::close() !!}
@stop
