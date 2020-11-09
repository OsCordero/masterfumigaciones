@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Editar la información del proveedor</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form action="{{route('suppliers.update',$supplier->id)}}" method="POST" novalidate>
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre_proveedor">Nombre de Proveedor</label>
                                <input type="text"
                                       class="form-control @error('nombre_proveedor') is-invalid @enderror"
                                       name="nombre_proveedor"
                                       value="{{ $supplier->nombre_proveedor }}"
                                       placeholder="Digite el nombre del proveedor" id="nombre_proveedor">
                                @error('nombre_proveedor')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tipo_producto">Tipo Producto</label>
                                <select id="tipo_producto"
                                        name="tipo_producto"
                                        class="form-control @error('tipo_producto') is-invalid @enderror">
                                    <option value="">Seleccione...</option>
                                    @foreach( $products as $product)
                                        <option value="{{$product->id}}"
                                            {{ $supplier->producttypes->id == $product->id ? 'selected':'' }}>
                                            {{$product->nombre_tipo_producto}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tipo_producto')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="telefono_proveedor">Teléfono</label>
                                <input type="tel"
                                       class="form-control @error('telefono_proveedor') is-invalid @enderror"
                                       value="{{ $supplier->telefono_proveedor }}"
                                       name="telefono_proveedor"
                                       placeholder="Digite el teléfono del proveedor" id="telefono_proveedor">
                                @error('telefono_proveedor')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="celular_proveedor">Teléfono Celular</label>
                                <input type="tel"
                                       class="form-control @error('celular_proveedor') is-invalid @enderror"
                                       name="celular_proveedor"
                                       value="{{ $supplier->celular_proveedor }}"
                                       placeholder="Digite el teléfono celular del proveedor"
                                       id="celular_proveedor">
                                @error('celular_proveedor')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="correo_proveedor">Correo electrónico</label>
                                <input type="email"
                                       class="form-control @error('correo_proveedor') is-invalid @enderror"
                                       name="correo_proveedor"
                                       value="{{ $supplier->correo_proveedor }}"
                                       placeholder="Digite el correo electrónico del proveedor"
                                       id="correo_proveedor" />
                                @error('correo_proveedor')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="direccion_proveedor">Dirección</label>
                                <textarea name="direccion_proveedor"
                                          id="direccion_proveedor"
                                          class="form-control @error('direccion_proveedor') is-invalid @enderror"
                                          rows="3">{{ $supplier->direccion_proveedor }}</textarea>
                                @error('direccion_proveedor')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="comentarios">Comentarios</label>
                                <textarea name="comentarios"
                                          id="comentarios"
                                          class="form-control @error('comentarios') is-invalid @enderror"
                                          rows="3">{{ $supplier->comentarios }}</textarea>
                                @error('comentarios')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="card-body">
                                <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                                <div class="limpiarCancelar-boton">
                                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                                    <a href="{{route('suppliers.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    <div/>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            @endsection

            @section('scripts')
                <script>
                    $(document).ready(function(){
                        $("#telefono_proveedor").mask("0000-0000");
                        $("#celular_proveedor").mask("0000-0000");
                    })
                </script>
            @endsection
