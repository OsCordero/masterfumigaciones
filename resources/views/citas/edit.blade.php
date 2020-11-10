@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
                <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Editar la cita del cliente</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('appoinments.update',$appointment->id)}}" method="POST">
                        @method('PATCH')
                            @csrf
                            <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-right">Cliente:</label>

                            <div class="col-md-6">
                               
                            <label for="cliente" class="col-md-7 col-form-label text-md-right">{{$appointment->establishment->client->nombre_cliente}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lugar" class="col-md-4 col-form-label text-md-right">Lugar:</label>

                            <div class="col-md-6">
                                <select id="lugar"  class="form-control @error('lugar') is-invalid @enderror select2-lugar" name="lugar" required autocomplete="lugar" autofocus>
                                <option value="{{$appointment->establishment->id}}">{{$appointment->establishment->nombre_establecimiento}}</option>
                                @foreach ($appointment->establishment->client->establishments as $establecimiento)
                                <option value="{{$establecimiento->id}}">{{$establecimiento->nombre_establecimiento}}</option>
                                @endforeach
                                </select>
                                @error('lugar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipo_fumigacion" class="col-md-4 col-form-label text-md-right">Tipo de fumigación:</label>

                            <div class="col-md-6">
                                <select id="tipo_fumigacion"  class="form-control @error('tipo_fumigacion') is-invalid @enderror select2-tipo-fumigacion" name="tipo_fumigacion" required autocomplete="tipo_fumigacion" autofocus>
                                <option value="{{$appointment->fumigation_type->id}}">{{$appointment->fumigation_type->nombre_tipo_fumigacion}}</option>
                                @foreach ($tipoFumigaciones as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->nombre_tipo_fumigacion}}</option>
                                @endforeach
                                </select>
                                @error('tipo_fumigacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                  
                        <div class="form-group row">
                            <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha:</label>

                            <div class="col-md-6">
                                <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" value='{{$appointment->fecha}}' required autocomplete="current-fecha">

                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-right">Hora:</label>

                            <div class="col-md-6">
                                <select id="hora"  class="form-control @error('hora') is-invalid @enderror select2-hora" name="hora" required autocomplete="hora" autofocus>
                                <option value="{{$appointment->hora}}">Hora actual: {{$appointment->hora}}</option>
                                <option value="08:00 AM">08:00 AM</option>
                                <option value="09:00 AM">09:00 AM</option>
                                <option value="10:00 AM">10:00 AM</option>
                                <option value="11:00 AM">11:00 AM</option>
                                <option value="12:00 AM">12:00 AM</option>
                                <option value="01:00 PM">01:00 PM</option>
                                <option value="02:00 PM">02:00 PM</option>
                                <option value="03:00 PM">03:00 PM</option>
                                <option value="04:00 PM">04:00 PM</option>
                                <option value="05:00 PM">05:00 PM</option>
                                <option value="06:00 PM">06:00 PM</option>
                                <option value="07:00 PM">07:00 PM</option>
                                <option value="08:00 PM">08:00 PM</option>
                                <option value="09:00 PM">09:00 PM</option>
                                <option value="10:00 PM">10:00 PM</option>
                                <option value="11:00 PM">11:00 PM</option>

                                </select>
                                @error('hora')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-right">Precio estandar:</label>

                            <div class="col-md-6">
                            <input type="text" id="precio" class="form-control" name="precio" value='$ {{$appointment->establishment->establishment_type->costo_aproximado}}'  disabled aria-describedby="precioHelp">
                            </div>
                        </div>
                                  <div class="card-body">
                                  <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                    <div class="limpiarCancelar-boton">
                                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                                    <a href="{{route('appoinments.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    </div>

                                </div>
                            
                          </form>   
                </div>
            
        </div>
    </div>
    <script type="text/javascript">
       $( document ).ready(function() {
    
    

    $("#lugar").change(function(){
        URL= "/citas/fetch_establecimientos_precio"
        const identificador = $(this).val();
        console.log('1')
        $.ajax({
            url:URL,
            data: {id: identificador},
            success: function(resp){
                let contenido= ""
                $.each(resp, function(index, value){
                    document.getElementById("precio").value ="$ " + value.costo_aproximado;
                    console.log(value.costo_aproximado)
                });
              
            }
        });
    });
   
 
    
      });
    </script>
    @endsection