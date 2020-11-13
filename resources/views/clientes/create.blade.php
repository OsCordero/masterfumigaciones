@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center" class="card-title">
                    <br>
                        <h3 class="card-text">Crear un nuevo cliente</h3>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form action="/clients" method="POST">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="name">Nombre:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Digite el nombre del cliente" required="required" class="form-control" name="nombre_cliente">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="DUI">DUI:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" required="required" placeholder="Digite el DUI del cliente" class="form-control" name="dui"> </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="telefono">Telefono:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" required="required" placeholder="Digite el número de télefono del cliente" class="form-control" name="telefono_cliente">
                                </div>
                            </div>


                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="celular">Celular:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" required="required" placeholder="Digite el número de celular del cliente" class="form-control" name="celular_cliente">
                                </div>
                            </div>


                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="correo_cliente">Correo electrónico:</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="correo_cliente"
                                        placeholder="Digite el correo electrónico del cliente"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-3">
                                    <label for="comentarios">Comentarios:</label>
                                </div>
                                <div class="col-md-9">


                                    <textarea name="comentarios" rows="4" cols="40"
                                        placeholder="Escriba algun comentario"></textarea>


                                </div>
                            </div>
                            <br>
                            

                                    <h3>Establecimiento</h3>
                                    @csrf
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="name">Nombre:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" required="required" class="form-control" name="nombre_establecimiento">
                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="tipo">Tipo de establecimiento:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="custom-select" name="tipo_estab">
                                                <option value="0">Seleccione el tipo de establecimiento</option>
                                                                
                                                <option value=1> Casa</option>        
                                                <option value=2>Establecimiento de ventas</option>        
                                                <option value=3>Oficina</option>     
                                                <option value=4>Departamentos</option>   

                                                </select> </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="celular">Dirección:</label>
                                        </div>
                                        <div class="col-md-9">


                                            <textarea name="direccion" rows="4" cols="40"
                                                placeholder="Escriba la direccion"></textarea>


                                        </div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label for="telefonoEstab">Teléfono:</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" required="required" class="form-control" name="telefono">
                                        </div>
                                    </div>
                                    <div class="row mb-5 mt-3 d-flex flex-row-reverse">
                                    <button type="button" class="btn btn-success">Agregar</button>
                                </div>

                                    <div class="row justify-content-center">

                                        <table class="table">
                                            <thead class="thead-light">
                                                <tr>


                                                    <th scope="col">Nombre</th>
                                                    <th scope="col">Correo electrónico</th>
                                                    <th scope="col">
                                                        <center>Accion</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td width="35%">Tienda la Mazorca Feliz</td>
                                                    <td width="40%">Col.Las Marianas, casa n° 32</td>
                                                    <td width="20%" class=""> <button type=" "
                                                            class="btn btn-danger ml-5"><i class="fas fa-trash-alt" ></i></button> </td>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                </div>                        
                        <div class="card-body">
                            <div class="guardar-boton">
                                <button type="submit" class="btn btn-success">Registrar</button>
                            </div>
                            <div class="limpiarCancelar-boton">
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                                <a href="{{route('clients.index')}}"><button type="button"
                                        class="btn btn-danger">Cancelar</button></a>
                                <div />

                            </div>

                            </form>
                        </div>

                    
                
            </div>
            </div>
        </div>
    </div>
    @endsection