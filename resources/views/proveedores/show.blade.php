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
                            <div class="form-group">
                                <label for="nombre_proveedor">Nombre de Proveedor</label>
                                <input type="text"
                                       readonly
                                       class="form-control" name="nombre_proveedor"
                                       value="{{ $supplier->nombre_proveedor }}"
                                       id="nombre_proveedor">
                            </div>

                            <div class="form-group">
                                <label for="tipo_producto">Tipo Producto</label>
                                <select id="tipo_producto"
                                        disabled
                                        name="tipo_producto"
                                        class="form-control">
                                    <option value="">Seleccione...</option>
                                    @foreach( $products as $product)
                                        <option value="{{$product->id}}"
                                            {{ $supplier->producttypes->id == $product->id ? 'selected':'' }}>
                                            {{$product->nombre_tipo_producto}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="telefono_proveedor">Teléfono</label>
                                <input type="tel"
                                       readonly
                                       class="form-control"
                                       value="{{ $supplier->telefono_proveedor }}"
                                       name="telefono_proveedor"
                                       id="telefono_proveedor">
                            </div>

                            <div class="form-group">
                                <label for="celular_proveedor">Teléfono Celular</label>
                                <input type="tel"
                                       readonly
                                       class="form-control"
                                       name="celular_proveedor"
                                       value="{{ $supplier->celular_proveedor }}"
                                       id="celular_proveedor">
                            </div>

                            <div class="form-group">
                                <label for="correo_proveedor">Correo electrónico</label>
                                <input type="email"
                                       readonly
                                       class="form-control"
                                       name="correo_proveedor"
                                       value="{{ $supplier->correo_proveedor }}"
                                       id="correo_proveedor" />
                            </div>

                            <div class="form-group">
                                <label for="direccion_proveedor">Dirección</label>
                                <textarea name="direccion_proveedor"
                                          id="direccion_proveedor"
                                          readonly
                                          class="form-control"
                                          rows="3">{{ $supplier->direccion_proveedor }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="comentarios">Comentarios</label>
                                <textarea name="comentarios"
                                          id="comentarios"
                                          readonly
                                          class="form-control"
                                          rows="3">{{ $supplier->comentarios }}</textarea>
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
