@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido/a</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center> SISTEMA INFORMÁTICO PARA APOYAR LA GESTIÓN DE LAS FUMIGACIONES EN LA EMPRESA MASTERFUMIGACIONES. </center>
                    <br>
                    <center>
                     <img src="img/logo.jpg" class="img-thumbnail" alt="Responsive image">
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
