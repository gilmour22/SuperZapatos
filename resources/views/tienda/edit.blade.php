@extends('layouts.master')

@section('content')

  {!! Form::model($tienda,['route'=>['tienda.update', $tienda->id], 'method'=>'PUT']) !!}
  <div class="form-group">
    {!!Form::label('Tienda')!!}
    {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingrese Nombre de la Tienda'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Direccion')!!}
    {!!Form::text('address',null,['class'=>'form-control', 'placeholder'=>'Ingrese la Direccion de la Tienda'])!!}
  </div>
  {!!Form::submit('Editar',['class'=>'btn btn-primary', 'style'=>'float:left; margin:5px;'])!!}

  {!! Form::close() !!}

  {!! Form::open(['route'=>['tienda.destroy', $tienda->id], 'method'=>'DELETE']) !!}
    {!!Form::submit('Borrar',['class'=>'btn btn-danger', 'style'=>'float:left; margin:5px;'])!!}
  {!! Form::close() !!}
@stop
