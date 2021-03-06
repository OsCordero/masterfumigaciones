@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
                <div style="text-align: center" class="card-title">
                <br>
                        <h3 class="card-text">Ingresar el monto de la venta</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route('appoinments.guardarMonto',$appointment->id)}}" method="GET">
                     
                            @csrf
                            <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-left"><strong>Código de fumigación:</strong> </label>
                            <div class="col-md-6">
                            <label for="cliente" id='codigo'  class="col-md-8 col-form-label text-md-center">{{$appointment->codigo_fumigacion}}</label>
                            
                            </div>
                            </div>

                          
                        
                        
                  
                        <div class="form-group row">
                            <label for="fecha" class="col-md-4 col-form-label text-md-left"><strong>Fecha:</strong> </label>

                            <div class="col-md-6">
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">{!! \Carbon\Carbon::parse($appointment->fecha)->format('d-m-Y') !!}</label> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-left"><strong>Hora:</strong> </label>

                            <div class="col-md-6">
                            <label for="cliente" class="col-md-8 col-form-label text-md-center">{{$appointment->hora}}</label>  
                            </div>
                        </div>
                        
                       
                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-left"><strong>Monto</strong></label>

                            <div class="col-md-6">
                            <input type="number" id="monto" class="form-control" name="monto" step="0.01"  aria-describedby="precioHelp">
                            </div>
                        </div>
                        

                                  <div class="card-body">
                                  <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Guardar</button>
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