@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  </br>
                <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Asignación de fumigadores</h3>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{route('appoinments.update',$appointment->id)}}" method="POST">
                        @method('PATCH')
                            @csrf
                           

                            <div class="form-group row">
                            <label for="tipo_fumigacion" class="col-md-4 col-form-label text-md-right"><strong>Código de fumigación:</strong> </label>

                            <div class="col-md-6">
                               
                            <label for="cliente" id='codigo'  class="col-md-8 col-form-label text-md-center">{{$appointment->codigo_fumigacion}}</label>
                            </div>
                        </div>
                            <div class="form-group row">
                            <label for="tipo_fumigacion" class="col-md-4 col-form-label text-md-right"><strong>Empleados:</strong> </label>

                            <div class="col-md-6">
                                <select id="employee"  class="form-control col-md-8 col-form-label text-md-center @error('employee') is-invalid @enderror select2-tipo-fumigacion" name="tipo_fumigacion" required autocomplete="tipo_fumigacion" autofocus>
                                <option value="0">Busqueda de empleado</option>
                                @foreach ($employees as $employee)
                                <option value="{{$employee->id}}">{{$employee->nombre_empleado}}</option>
                                @endforeach
                                </select>
                            
                            </div>
                        </div>
                            

                        

                                  <div class="conteiner">
                                  <div class="row">
                                  <div class="col-md-8"></div>
                                  <div class="guardar-boton col-6 col-md-4">
                                    <button type="button" class="btn btn-success" onclick="agregar()">+ Agregar</button>
                                    </div>
                                   

                                </div>
                                </div>
                               
                               </br>
                               </br>


                                <div class="row justify-content-center">

            <table class="table">
                <thead class="thead-light">
                    <tr>

                        <th scope="col" width="80%">Nombre del empleado</th>
                        <th scope="col" width="20%">Quitar</th>
                       
                    </tr>
                </thead>
                <tbody id="empleados">
                  
                        
                </tbody>
            </table>

        </div>
                            
                          </form>   

                          <div class="card-body">
                                  <div class="guardar-boton">
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                    <div class="limpiarCancelar-boton">
                                   
                                    <a href="{{route('appoinments.index')}}"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                    </div>

                                </div>
                
           
        </div>
    </div>
    <script type="text/javascript">
        function agregar(){
            var employ = document.getElementById("employee");
            var employee = employ.options[employ.selectedIndex].text;

            var filas=document.querySelectorAll("table tbody tr");
            var existe=0;
            filas.forEach(function (e) {
                    var columnas=e.querySelectorAll("td");

                    var empleado=columnas[0].textContent;
                    if(empleado==employee){
                        existe=1;
                    }
            })
                        if(existe==1){
                            console.log('existe')
                        }
                        else {
                            var fila = "<tr><td>" + employee + "</td>" +  " <td ><button onclick='eliminarFila(this.parentNode.parentNode)'type='button'  class='btn btn-danger'>X</button> </td> </tr>";

                            var btn = document.createElement("TR");
                            btn.innerHTML = fila;
                            document.getElementById("empleados").appendChild(btn);
                        }

  }
  function eliminarFila(element) {
      element.parentNode.removeChild(element);
  
  }
    </script>
@endsection