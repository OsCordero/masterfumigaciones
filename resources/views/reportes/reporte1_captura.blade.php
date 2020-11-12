@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
      </br>
                <div style="text-align: center" class="card-title">
                        <h3 class="card-text">Fumigaciones realizadas en un periodo de tiempo</h3>
                    </div>
                <div class="card-body">
             

                        <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-right">Cliente:</label>

                            <div class="col-md-6">
                                <select id="cliente"  class="form-control @error('cliente') is-invalid @enderror js-example-basic-single" name="cliente" required autocomplete="cliente" autofocus>
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
                            <label for="fecha_inicio" class="col-md-4 col-form-label text-md-right">Fecha inicio:</label>

                            <div class="col-md-6">
                                <input id="fecha_inicio" type="date" class="form-control @error('fecha_inicio') is-invalid @enderror" name="fecha_inicio" required autocomplete="current-fecha_inicio">

                                @error('fecha_inicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_fin" class="col-md-4 col-form-label text-md-right">Fecha fin:</label>

                            <div class="col-md-6">
                                <input id="fecha_fin" type="date" class="form-control @error('fecha_fin') is-invalid @enderror" name="fecha_fin" required autocomplete="current-fecha_fin">

                                @error('fecha_fin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="button" class="btn btn-primary" id="generar-reporte">
                                    Generar reporte
                                </button>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
   

    $(document).on("click", "#generar-reporte", function() {

        var cliente = $("#cliente").val();
        var fechaInicio = $('#fecha_inicio').val();
        var fechaFin = $('#fecha_fin').val();

        window.location.href = "/reporte_pdf1/"+cliente+"?fecha_inicio="+fechaInicio+"&fecha_fin="+fechaFin;
    });

});
</script>
@endsection
