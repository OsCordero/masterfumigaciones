@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario</div>

                <div class="card-body">
                    <p><strong>Nombre: </strong> {{$client->nombre_cliente}}</p>
                    <p><strong>Dui: </strong> {{$client->dui}}</p>
                   <p><strong>Correo electrónico: </strong> {{$client->correo_cliente}}</p>
                   <p><strong>telefono: </strong> {{$client->telefono_cliente}}</p>
                   <p><strong>celular: </strong> {{$client->celular_cliente}}</p>
                   <div class="row justify-content-center">
                    <h3>Establecimientos del cliente</h3>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo electrónico</th>
                                <th scope = "col">Tipo </th>                                
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td width="35%">Tienda la Mazorca Feliz</td>
                                <td width="40%">Col.Las Marianas, casa n° 32</td>     
                                <td width="40%">Casa</td>                            
                            </tr>

                        </tbody>
                    </table>

                </div>


                   <a href="{{route('clients.index')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
