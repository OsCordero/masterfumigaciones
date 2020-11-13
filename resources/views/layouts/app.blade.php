<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MasterFumigaciones </title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand negrita" href="{{ url('/home') }}">
                    MasterFumigaciones
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      @can('users.index')
                      <li class="nav-item">
                        <a class="nav-link negrita" href="{{ route('users.index') }}">&nbspUsuarios</a>
                    </li>
                      @endcan

                        @can('citas')
                        <li class="nav-item">
                            <a class="nav-link negrita" href="{{ url('/appoinments') }}">&nbspCitas</a>
                        </li>
                        @endcan

                        @can('clientes')
                        <li class="nav-item">
                            <a class="nav-link negrita" href="{{ route('clients.index') }}">&nbspClientes</a>
                        </li>
                        @endcan

                        @can('proveedores')
                        <li class="nav-item">
                            <a class="nav-link negrita" href="{{ route('suppliers.index') }}">&nbspProveedores</a>
                        </li>
                        @endcan

                                               
                        @can('reporteTactico', 'reporteEstrategico')
                        <li class="nav-item dropdown">
                        <a id="navbarDropdown1" class="nav-link dropdown-toggle negrita nav-link color" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        &nbspReportes <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">

                                @can('reporteTactico')
                                <a class="dropdown-item cerrar-sesion-color" href="/reportes1">
                                    Fumigaciones realizadas a un cliente
                                </a>
                                @endcan
                              

                                @can('reporteEstrategico')
                                <a class="dropdown-item cerrar-sesion-color" href="/reportes2">
                                    Fumigaciones canceladas
                                </a>
                                @endcan
                               
                        </li>
                        @endcan


                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link negrita" href="{{ route('login') }}">Iniciar sesión</a>
                            </li>
                            <!--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif-->
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle negrita" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item cerrar-sesion-color" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <strong>Cerrar sesión</strong>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@yield('scripts')
</html>
