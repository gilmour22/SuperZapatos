@extends('layouts.master')

@section('content')

  {!! Form::open(['route'=>'producto.store', 'method'=>'POST']) !!}
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
  {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}


  {!! Form::close() !!}
@stop
