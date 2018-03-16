@extends('layouts.master')

@section('content')
<br>
<nav class="white">
    <div class="nav-wrapper">
      <div class="col s12 padding-left-60">
        <a href="/products" class="breadcrumb black-text">Mantenedor de Productos</a>
        <a href="#" class="breadcrumb black-text">Crear nuevo Producto</a>
      </div>
    </div>
  </nav>
<br>

<form action="/products" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="input-field col s12">
            <input id="internal" name="internal" type="text" class="validate">
            <label for="internal">Código Interno</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="description" name="description" type="text" class="validate" required>
            <label for="description">Descripción</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="value" name="value" type="text" class="validate" required>
            <label for="value">Valor</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12 center">
            <button class="btn waves-effect waves-light indigo" type="submit">Guardar
                <i class="material-icons right">save</i>
            </button>
        </div>
    </div>
</form>
      
@endsection('content')
