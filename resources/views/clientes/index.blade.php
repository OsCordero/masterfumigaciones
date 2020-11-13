@extends('layouts.app')
@section('content')

<br>
    <div class="container">
    <h2> <center> Lista de clientes </center><a href="{{ route('clients.create')}}">
        <br>
        <button type="button" class="btn btn-success float-right">Agregar
                    un nuevo cliente</button></a></h2>
        <br>
        <br>
            <div class="row justify-content-center">
                <nav id="filter_bar" class="w-100 mb-1  navbar-default bg-">
                    <form action="{{ route('suppliers.filter') }}" method="post" novalidate
                          class="w-100 form-inline">
                        @csrf
                        <div class="form-group col-md-4">
                            <label for="name_supplier">Nombre: </label>
                            <input id="name_supplier" name="name_supplier"
                                class="form-control ml-1" style="width:70%" type="text"
                                placeholder="Digite el nombre parcial o completo..."/>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="client_type">Tipo de establecimiento: </label>
                            <select class="form-control ml-1"  style="width:70%"
                                    id="client_type" name="client_type">
                                <option value="0">Seleccione...</option>
                                @foreach($clients as $client)
                                    <option value="{{$client->id}}">
                                        {{$client->dui}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 justify-content-center">
                            <button class="btn  btn-primary" type="submit">Buscar</button>
                        </div>
                    </form>
                </nav>
            </div>
            <br>
        <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-light">
                    <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Correo electrónico</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col"><center>Acciones</center></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td width="20%">{{ $client->nombre_cliente }}</td>
                            <td width="20%">{{ $client->correo_cliente }}</td>                            
                            <td width="20%">{{ $client->telefono_cliente }}</td>                            
                            <td width="15%">
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
