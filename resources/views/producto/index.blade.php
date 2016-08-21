@extends('layouts.master')

@section('content')

@if (Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif

{!! link_to('producto/create', $title = 'Crear Producto', $attributes = ['class'=>'btn btn-success','style'=>'float:right;margin:20px;']); !!}

<table class="table table-striped">
  <thead>
    <th>Producto</th>
    <th>Descripcion</th>
    <th>Precio</th>
    <th>En Exhibicion</th>
    <th>En Bodega</th>
    <th>Tienda</th>
    <th>Op</th>
  </thead>
  <tbody>
    @foreach($productos as $producto)
    <tr>
      <td>{{$producto->name}}</td>
      <td>{{$producto->description}}</td>
      <td>$ {{$producto->price}}</td>
      <td>{{$producto->total_in_shelf}}</td>
      <td>{{$producto->total_in_vault}}</td>
      <td>{{$producto->store}}</td>
      <td>{!! link_to_route('producto.edit', $title = 'Editar', $parameters = $producto->id, $attributes = ['class'=>'btn btn-primary btn-xs']); !!}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop
