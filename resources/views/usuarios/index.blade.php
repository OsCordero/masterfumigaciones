@extends('layouts.app')
@section('content')


<br>
    <div class="container">
        <h2><center>Lista de usuarios </center><a href="users/create"></h2>
       
        <br>
        <button type="button" class="btn btn-success float-right">Agregar un nuevo usuario</button></a>
                    <br>
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
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row" width="5%" >{{ $user->id }}</th>
                            <td width="35%">{{ $user->name }}</td>
                            <td width="40%">{{ $user->email }}</td>                            
                            <td width="20%">
                                 <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    <a href="{{ route('users.show', $user->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button></a>
                                    <a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
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
