@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de la cita</div>

                <div class="card-body">
                <p><strong>Cliente: </strong> {{$establecimiento->client->nombre_cliente}}</p>
                    <p><strong>Fecha: </strong> {{$appointment->fecha}}</p>
                   <p><strong>Hora: </strong> {{$appointment->hora}}</p>
                   
                   <p><strong>Tipo Fumigación: </strong> {{$tipo_fumigacion->nombre_tipo_fumigacion}}</p>
                   <p><strong>Establecimiento: </strong> {{$establecimiento->nombre_establecimiento}}</p>
                   <p><strong>Tipo establecimiento: </strong> {{$establecimiento->establishment_type->nombre_tipo_establecimiento}}</p>

                   <a href="{{route('appoinments.index')}}"><button type="button" class="btn btn-primary">Regresar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection