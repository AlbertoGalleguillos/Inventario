@extends('layouts.master')

@section('content')
<br>
<nav class="white">
    <div class="nav-wrapper">
      <div class="col s12 padding-left-60">
        <a href="/products" class="breadcrumb black-text">Mantenedor de Productos</a>
      </div>
    </div>
  </nav>
<br>

<table class="stripped highlight">
    <thead>
        <tr>
            <th>Id</th>
            <th>Código</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tbody>   
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->internal }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->status->name }}</td>
                <td>{{ $product->value }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="center">
                    Aún no se han ingresado productos
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large waves-light red z-depth-3 tooltipped" 
        data-position="left" data-delay="50" data-tooltip="Crear Producto" 
        href="/products/create">
        <i class="large material-icons">add</i>
    </a>
</div>
@endsection('content')