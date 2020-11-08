@extends('layouts.app')
@section('content')

<br>
<br>
    <div class="container">
        <h2>Listado de citas<a href="appoinments/create"><button type="button" class="btn btn-success float-right">Crear una cita</button></a></h2>
                    <br>
<form>
  <div class="form-row align-items-center">
  <div class="col-sm-3 my-1">
    
      
      <input id="cliente_buscar" type="text" class="form-control"  name="cliente_buscar" placeholder="Buscar cliente" required autocomplete="current-fecha_fin">
    </div>
    <div class="col-sm-3 my-1">
     
      <input id="fecha_buscar" type="date" class="form-control"  name="fecha_buscar" required autocomplete="current-fecha_fin">
    </div>
  
   
  
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </div>
</form>
<br>
        <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-light">
                    <tr>

                        <th scope="col">Nombre del cliente</th>
                        <th scope="col">Establecimiento</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col"><center>Opciones</center></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clients as $client)

                    @if($client->establishments)
                    @foreach ($client->establishments as $establishment)
                   @if($establishment->appointments)
                   @foreach($establishment->appointments as $appointment)
                   @if($appointment->cancelado==false)
                        <tr>
                            <th scope="row" width="20%" >{{ $client->nombre_cliente }}</th>
                            <td width="25%">{{ $establishment->nombre_establecimiento }}</td>

                            <td width="10%">{{ $appointment->fecha}}</td>
                            <td width="10%">{{ $appointment->hora}}</td>           
                                               
                            <td width="20%">
                                 <form action="{{ route('appoinments.destroy', $appointment->id) }}" method="post">
                                    <a href="{{ route('appoinments.show', $appointment->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-eye"></i></button></a>
                                    <a href="{{ route('appoinments.edit', $appointment->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button></a>

                                    @csrf
                                     @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt" style="color:black"></i></button> 
                                    <a href="{{ route('asignarEmpleado', $appointment->id) }}"><button type="button" class="btn btn-warning"><i class="fas fa-users"></i></button></a>
                                </form>
                                
                            </td>
                        </tr>
                    @endif
                        @endforeach
                        @endif
                        @endforeach
                        @endif
                    @endforeach
                </tbody>
            </table>

        </div>

    @endsection
