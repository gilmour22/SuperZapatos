@extends('layouts.master')

@section('content')

  {!! Form::open(['route'=>'tienda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {!!Form::label('Tienda')!!}
    {!!Form::text('tienda',null,['class'=>'form-control', 'placeholder'=>'Ingrese Nombre de la Tienda'])!!}
  </div>
  <div class="form-group">
    {!!Form::label('Direccion')!!}
    {!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Ingrese la Direccion de la Tienda'])!!}
  </div>
  {!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}


  {!! Form::close() !!}
@stop
