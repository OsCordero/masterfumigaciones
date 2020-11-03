@extends('layouts.app')
@section('content')
 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  

                    <div class="card-body">
                   <form action="{{route('users.update',$user->id)}}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Escriba el nombre del usuario">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}" aria-describedby="emailHelp"> </div>
                            <h6>Lista de roles</h6>
                        
                            <select class="custom-select" name="rol">
                                <option value="0">Mantener rol actual</option>
                                @foreach ($roles as $rol)
                                <option value={{$rol->id}}>{{$rol->name}}</option>
                                @endforeach
                            </select>
                            <div class="card-body">
                            <div class="guardar-boton">
                                <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                                <div class="limpiarCancelar-boton">
                                
                                <a href="{{route('users.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                </div>
                            </div>
                        </form>
                </div>
            
        </div>
    </div>



@endsection