@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
                <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Cita de fumigación</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route('appoinments.update',$appointment->id)}}" method="POST">
                        @method('PATCH')
                            @csrf
                            <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-left"><strong>Código de fumigación:</strong> </label>
                            <div class="col-md-6">
                            <label for="cliente" id='codigo'  class="col-md-8 col-form-label text-md-center">{{$appointment->codigo_fumigacion}}</label>
                            
                            </div>
                            </div>

                            <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-left"><strong>Cliente:</strong> </label>

                            <div class="col-md-6">
                               
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">{{$appointment->establishment->client->nombre_cliente}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lugar" class="col-md-4 col-form-label text-md-left"><strong>Lugar:</strong> </label>

                            <div class="col-md-6">
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">{{$appointment->establishment->nombre_establecimiento}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo_fumigacion" class="col-md-4 col-form-label text-md-left"><strong>Tipo de fumigación:</strong> </label>

                            <div class="col-md-6">
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">{{$appointment->fumigation_type->nombre_tipo_fumigacion}}</label> 
                            </div>
                        </div>
                  
                        <div class="form-group row">
                            <label for="fecha" class="col-md-4 col-form-label text-md-left"><strong>Fecha:</strong> </label>

                            <div class="col-md-6">
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">{{$appointment->fecha}}</label> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-left"><strong>Hora:</strong> </label>

                            <div class="col-md-6">
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">{{$appointment->hora}}</label>  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-left"><strong>Precio estandar:</strong> </label>

                            <div class="col-md-6">
                         
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">$ {{$appointment->establishment->establishment_type->costo_aproximado}}</label>  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-left"><strong>Fumigadores asignados:</strong> </label>
                        </div>
                        <div class="form-group row">
                        @if(sizeof($appointment->employees) > 0)
                        <ul>
                                @foreach($appointment->employees as $employee)
                                <li type="circle">{{$employee->nombre_empleado}}</li>
                                @endforeach
                        </ul>
                            @else
                            <label for="hora" class="col-md-4 col-form-label text-md-left">No tiene trabajadores asignados</label>
                        @endif
                        </div>

                        

                                  <div class="card-body">
                                  <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Imprimir</button>
                                    </div>
                                    <div class="limpiarCancelar-boton">
                                  
                                    <a href="{{route('appoinments.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    </div>

                                </div>
                            
                          </form>   
                </div>
                
            
        </div>
    </div>
@endsection