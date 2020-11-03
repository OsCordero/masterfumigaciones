@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuario</div>

                <div class="card-body">
                    <p><strong>Nombre: </strong> {{$user->name}}</p>
                   <p><strong>Correo electrónico:: </strong> {{$user->email}}</p>
                   <p><strong>Rol: </strong> {{$rol}}</p>

                   <a href="{{route('users.index')}}"><button type="button" class="btn btn-primary">regresar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
