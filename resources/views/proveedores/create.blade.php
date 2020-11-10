@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Crear un nuevo proveedor</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form action="{{route('suppliers.store')}}" method="POST" novalidate>
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="nombre_proveedor">Nombre:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text"
                                           class="form-control @error('nombre_proveedor') is-invalid @enderror"
                                           name="nombre_proveedor"
                                           value="{{ old('nombre_proveedor') }}"
                                           placeholder="Digite el nombre del proveedor" id="nombre_proveedor">
                                    @error('nombre_proveedor')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="tipo_producto">Tipo de producto:</label>
                                </div>
                                <div class="col-md-9">
                                    <select id="tipo_producto"
                                            name="tipo_producto"
                                            class="form-control @error('tipo_producto') is-invalid @enderror">
                                        <option value="">Seleccione...</option>
                                        @foreach( $products as $product)
                                            <option value="{{$product->id}}" {{ old('tipo_producto') == $product->id ? 'selected':'' }}>
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
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="direccion_proveedor">Dirección:</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="direccion_proveedor"
                                              id="direccion_proveedor"
                                              class="form-control @error('direccion_proveedor') is-invalid @enderror"
                                              rows="3">{{ old('direccion_proveedor') }}</textarea>
                                    @error('direccion_proveedor')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="telefono_proveedor">Teléfono:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="tel"
                                           class="form-control @error('telefono_proveedor') is-invalid @enderror"
                                           value="{{ old('telefono_proveedor') }}"
                                           name="telefono_proveedor"
                                           placeholder="Digite el teléfono del proveedor" id="telefono_proveedor">
                                    @error('telefono_proveedor')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="celular_proveedor">Celular:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="tel"
                                           class="form-control @error('celular_proveedor') is-invalid @enderror"
                                           name="celular_proveedor"
                                           value="{{ old('celular_proveedor') }}"
                                           placeholder="Digite el teléfono celular del proveedor"
                                           id="celular_proveedor">
                                    @error('celular_proveedor')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="correo_proveedor">Correo electrónico:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email"
                                           class="form-control @error('correo_proveedor') is-invalid @enderror"
                                           name="correo_proveedor"
                                           value="{{ old('correo_proveedor') }}"
                                           placeholder="Digite el correo electrónico del proveedor"
                                           id="correo_proveedor" />
                                    @error('correo_proveedor')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <label for="comentarios">Comentarios:</label>
                                </div>
                                <div class="col-md-9">
                                    <textarea name="comentarios"
                                              id="comentarios"
                                              class="form-control @error('comentarios') is-invalid @enderror"
                                              rows="3">{{ old('comentarios') }}</textarea>
                                    @error('comentarios')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Guardar</button>
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
