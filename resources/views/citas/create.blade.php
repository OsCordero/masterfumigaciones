@extends('layouts.app')

@section('javascript')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js" defer></script>
@endsection
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  

                    <div class="card-body">
                        <form action="/users" method="POST">
                            @csrf
                            <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-right">Cliente:</label>

                            <div class="col-md-6">
                                <select id="input-cliente"  class="form-control" name="cliente" required autofocus>
                                <option value="0">Seleccione el cliente</option>
                                @foreach ($clients as $client)
                                <option value="{{$client->id}}">{{$client->nombre_cliente}}</option>
                                @endforeach
                                </select>
                                @error('cliente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lugar" class="col-md-4 col-form-label text-md-right">Lugar:</label>

                            <div class="col-md-6">
                                <select id="lugar"  class="form-control @error('lugar') is-invalid @enderror select2-lugar" name="lugar" required autocomplete="lugar" autofocus>
                                
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
                                <input id="fecha" type="date" class="form-control @error('fecha') is-invalid @enderror" name="fecha" required autocomplete="current-fecha">

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
                            <input type="text" class="form-control" name="precio" value="Precio" disabled aria-describedby="precioHelp">
                            </div>
                        </div>
                                  <div class="card-body">
                                  <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Registrar</button>
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
        alert("GHOAL");
        

        $("#input-cliente").change(function(){
        URL= "/citas/fetch_establecimientos"
        const identificador = $(this).val();
        console.log('1')
        $.ajax({
            url:URL,
            data: {id: identificador},
            success: function(resp){
                let contenido= "   <option value=\"\" selected disabled hidden>Busqueda de la sucursal</option>"
                $.each(resp, function(index, value){
                    contenido+= '<option value="'+value.id+'">'+value.nombre+'</option>';
                });
                console.log('2')
                $("#lugar").html(contenido);
            }
        });
    });
 
    
      });
    </script>
   
@endsection