@extends('layouts.app')
@section('content')

    <br>
    <br>
    <div class="container">

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

        <h2>Lista de proveedores <a href="{{ route('suppliers.create')}}"><button type="button" class="btn btn-success float-right">Agregar
                    un nuevo proveedor</button></a></h2>
        <br>
            <div class="row justify-content-center">
                <nav class="w-100 mb-1 navbar navbar-default bg-default">
                    <form action="{{ route('suppliers.filter') }}" method="post" novalidate
                          class="w-100 form-inline">
                        @csrf
                        <div class="form-group col-md-5">
                            <label for="name_supplier">Nombre Proveedor: </label>
                            <input id="name_supplier" name="name_supplier"
                                class="form-control ml-1" style="width:70%" type="text"
                                placeholder="Digite el nombre parcial o completo..."/>
                        </div>

                        <div class="form-group col-md-5">
                            <label for="product_type">Tipo Producto: </label>
                            <select class="form-control ml-1"  style="width:70%"
                                    id="product_type" name="product_type">
                                <option value="0">Seleccione...</option>
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">
                                        {{$product->nombre_tipo_producto}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 justify-content-center">
                            <button class="btn btn-lg btn-outline-primary" type="submit">Buscar</button>
                        </div>
                    </form>
                </nav>
            </div>

        <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Teléfono Celular</th>
                    <th scope="col">Producto</th>
                    <th scope="col"><center>Acciones</center></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($suppliers as $supplier)
                    <tr>
                        <th scope="row" width="20%" >{{ $supplier->nombre_proveedor }}</th>
                        <td width="20%">{{ $supplier->telefono_proveedor }}</td>
                        <td width="20%">{{ $supplier->celular_proveedor }}</td>
                        <td width="20%">{{ $supplier->producttypes->nombre_tipo_producto }}</td>
                        <td width="20%">
                            <form method="post" action="{{ route('suppliers.destroy',$supplier->id) }}">
                                <a href="{{ route('users.show', $supplier->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button></a>
                                <a href="{{ route('users.edit', $supplier->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="onDelete(event)"
                                        class="btn btn-danger">
                                    <i class="fas fa-trash-alt" style="color:black"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
            <div class="row justify-content-center">
                {{$suppliers->links()}}
            </div>
@endsection
@section('scripts')
                <script>
                    function onDelete(event){
                        let ban = confirm("¿Está seguro de eliminar el registro?");
                        if(!ban){
                            event.preventDefault();
                            return false;
                        }
                    }
                </script>
@endsection
