@extends('layouts.app')
@section('content')

<br>
<br>
    <div class="container">
        <h2>Lista de Clientes <a href="clients/create"><button type="button" class="btn btn-success float-right">Agregar nuevo cliente</button></a></h2>
                    <br>
        <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-light">
                    <tr>

                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col"><center>Acciones</center></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <th scope="row" width="5%" >{{ $client->id }}</th>
                            <td width="35%">{{ $client->nombre_cliente }}</td>
                            <td width="40%">{{ $client->correo_cliente }}</td>                            
                            <td width="20%">
                                 <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                                    <a href="{{ route('clients.show', $client->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button></a>
                                    <a href="{{ route('clients.edit', $client->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
                                    @csrf
                                     @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt" style="color:black"></i></button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    @endsection
