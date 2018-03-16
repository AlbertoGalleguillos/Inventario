@extends('layouts.master')

@section('content')
<br>
<div class="hide-on-med-and-down"><br><br></div>
<div class="row">
    <div class="col s12 l6">
        <a href="/inventory">
            <div class="card hoverable">
                <div class="card-content center">
                <h1><i class="material-icons big">assignment</i></h1>
                <h5>Inventario</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col s12 l6">
        <a href="/products">
            <div class="card hoverable">
                <div class="card-content center">
                <h1><i class="material-icons big">store</i></h1>
                <h5>Mantenedor de Productos</h5>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row">
    <div class="col s12 l6">
        <a href="/moves">
            <div class="card hoverable">
                <div class="card-content center">
                <h1><i class="material-icons big">compare_arrows</i></h1>
                <h5>Movimientos</h5>
                </div>
            </div>
        </a>
    </div>
    <div class="col s12 l6">
        <a href="/settings">
            <div class="card hoverable">
                <div class="card-content center">
                <h1><i class="material-icons big">settings</i></h1>
                <h5>Configuración</h5>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection('content')
