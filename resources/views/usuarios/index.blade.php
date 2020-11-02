@extends('layouts.app')
@section('content')

    <div class="container">
        <h2>Lista de Usuarios <a href="users/create"><button type="button" class="btn btn-success float-right">Agregar
                    Usuarios</button></a></h2>
        <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-dark">
                    <tr>

                        <th scope="col">ID</th>
                        <th scope="col">nombre</th>
                        <th scope="col">correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>                            
                            <td>
                                 <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                    <a href="{{ route('users.show', $user->id) }}"><button type="button" class="btn btn-info">Ver</button></a>
                                    <a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                                    @csrf
                                     @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button> 
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    @endsection
