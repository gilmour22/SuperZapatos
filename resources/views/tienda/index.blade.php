@extends('layouts.master')

@section('content')

@if (Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
{{Session::get('message')}}
</div>
@endif

{!! link_to('tienda/create', $title = 'Crear Tienda', $attributes = ['class'=>'btn btn-success','style'=>'float:right;margin:20px;']); !!}

<table class="table table-striped">
  <thead>
    <th>Tienda</th>
    <th>Direccion</th>
    <th>Op</th>
  </thead>
  <tbody>
    @foreach($tiendas as $tienda)
    <tr>
      <td>{{$tienda->name}}</td>
      <td>{{$tienda->address}}</td>
      <td>{!! link_to_route('tienda.edit', $title = 'Editar', $parameters = $tienda->id, $attributes = ['class'=>'btn btn-primary btn-xs']); !!}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop
