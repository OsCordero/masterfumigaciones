@extends('layouts.app')
@section('content')

    <br>
    <br>
    <div class="container">
        <h2>Lista de proveedores <a href="{{ route('suppliers.create')}}"><button type="button" class="btn btn-success float-right">Agregar
                    un nuevo proveedor</button></a></h2>
        <br>
        <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Teléfono Celular</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col"><center>Acciones</center></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($suppliers as $supplier)
                    <tr>
                        <th scope="row" width="20%" >{{ $supplier->nombre_proveedor }}</th>
                        <td width="20%">{{ $supplier->telefono_proveedor }}</td>
                        <td width="20%">{{ $supplier->celular_proveedor }}</td>
                        <td width="20%">{{ $supplier->correo_proveedor }}</td>
                        <td width="20%">
                            <form action="{{ route('users.destroy', $supplier->id) }}" method="post">
                                <a href="{{ route('users.show', $supplier->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button></a>
                                <a href="{{ route('users.edit', $supplier->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
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
