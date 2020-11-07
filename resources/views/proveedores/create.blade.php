@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Registro de proveedor</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form action="{{route('suppliers.store')}}" method="POST" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="nombre_proveedor">Nombre de Proveedor</label>
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

                            <div class="form-group">
                                <label for="telefono_proveedor">Teléfono</label>
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

                            <div class="form-group">
                                <label for="celular_proveedor">Teléfono Celular</label>
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

                            <div class="form-group">
                                <label for="correo_proveedor">Correo electrónico</label>
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

                            <div class="form-group">
                                <label for="direccion_proveedor">Dirección</label>
                                <textarea name="direccion_proveedor"
                                          id="direccion_proveedor"
                                          value="{{ old('direccion_proveedor') }}"
                                          class="form-control @error('direccion_proveedor') is-invalid @enderror"
                                          rows="3"></textarea>
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
                                          value="{{ old('comentarios') }}"
                                          class="form-control @error('comentarios') is-invalid @enderror"
                                          rows="3"></textarea>
                                @error('comentarios')
                                <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="card-body">
                                <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>
                                <div class="limpiarCancelar-boton">
                                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                                    <a href="{{route('users.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    <div/>

                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.mask.js') }}"></script>
                <script>
                    $(document).ready(function(){
                        $("#telefono_proveedor").mask("0000-0000");
                        $("#celular_proveedor").mask("0000-0000");
                    })
                </script>
@endsection
