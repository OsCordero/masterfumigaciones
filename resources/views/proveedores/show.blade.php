@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Información del proveedor</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form>
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="nombre_proveedor">Nombre:</label>
                                </div>
                                <div class="col-md-9">
                                    <label>{{ $supplier->nombre_proveedor }}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="tipo_producto">Tipo de producto:</label>
                                </div>
                                <div class="col-md-9">
                                    <label>{{$supplier->producttypes->nombre_tipo_producto}}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="direccion_proveedor">Dirección:</label>
                                </div>
                                <div class="col-md-9">
                                    <label>{{ $supplier->direccion_proveedor }}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="telefono_proveedor">Teléfono:</label>
                                </div>
                                <div class="col-md-9">
                                    {{ $supplier->telefono_proveedor }}
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="celular_proveedor">Celular:</label>
                                </div>
                                <div class="col-md-9">
                                    <label>{{ $supplier->celular_proveedor }}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="correo_proveedor">Correo electrónico:</label>
                                </div>
                                <div class="col-md-9">
                                    <label>{{ $supplier->correo_proveedor }}</label>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="comentarios">Comentarios:</label>
                                </div>
                                <div class="col-md-9">
                                    <label>{{ $supplier->comentarios }}</label>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="limpiarCancelar-boton">
                                    <a href="{{route('suppliers.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    <div/>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
@endsection
