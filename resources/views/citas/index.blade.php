@extends('layouts.app')
@section('content')

<br>
<br>
    <div class="container">
        <h2>Listado de citas<a href="users/create"><button type="button" class="btn btn-success float-right">Crear una cita</button></a></h2>
                    <br>
        <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-light">
                    <tr>

                        <th scope="col">Nombre del cliente</th>
                        <th scope="col">Establecimiento</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col"><center>Opciones</center></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)

                    @if($client->establishments)
                    @foreach ($client->establishments as $establishment)
                   @if($establishment->appointments)
                   @foreach($establishment->appointments as $appointment)
                   
                        <tr>
                            <th scope="row" width="20%" >{{ $client->nombre_cliente }}</th>
                            <td width="25%">{{ $establishment->nombre_establecimiento }}</td>

                            <td width="10%">{{ $appointment->fecha}}</td>
                            <td width="10%">{{ $appointment->hora}}</td>           
                                               
                            <td width="20%">
                                 <form action="" method="post">
                                    <a href=""><button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button></a>
                                    <a href=""><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
                                    @csrf
                                     @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt" style="color:black"></i></button> 
                                </form>
                            </td>
                        </tr>
                  
                        @endforeach
                        @endif
                        @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>

        </div>

    @endsection