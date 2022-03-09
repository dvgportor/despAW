<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
            background: #f7fafc;
        }
    </style>
</head>
<body>
    <div class="container-fluid fixed-top p-4">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            Hola, {{auth()->user()->nombre}}
                            <a href="{{ url('/dashboard') }}" class="text-muted">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('registro.create'))
                                <a href="{{ route('registro.create') }}" class="ms-4 text-muted">Registrarse</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 pt-5 px-5">
        <div class="row justify-content-center px-4">
            <div class="col-md-12 col-lg-9">
               <img src="media/milogo.png" alt="HOLA" style="width: 40%; border: 3px; border-radius: 5px">

                <div class="card shadow-sm">
                    <div class="row">
                        <div class="col-md-6 pr-0">
                            <div class="card-body border-right border-bottom p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                           <h2> Información de la Api</h2>
                                        </div>
                                        <p class="text-muted small">
                                            <h3>a20davidvg.local/</h3>
                                            - <a href="http://a20davidvg.kozow.com/users">users</a> -> Usuarios con privilegios administrativos (requiere login)

                                            <br>

                                            - <a href="http://a20davidvg.kozow.com/clientes">clientes</a> -> Clientes con datos en la base de datos de la página (requiere login, versión privada)
                                            <br>

                                            - <a href="http://a20davidvg.kozow.com/clientes/invitado">clientes/invitado</a> -> Clientes con datos en la base de datos de la página (Versión pública)

                                            <br>
                                            - <a href="http://a20davidvg.kozow.com/archivos">archivos</a> -> Todos los archivos en la base de datos, relacionados por el id con los clientes (permite descarga).

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6 pl-0">
                            <div class="card-body p-3 h-100">
                                <div class="d-flex flex-row bd-highlight pt-2">
                                    <div>
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="text-muted" width="32"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <div class="pl-3">
                                        <div class="mb-2">
                                            <span class="h5 font-weight-bolder text-dark">Aspiraciones de la web</span>
                                        </div>
                                        <p class="text-muted small">
                                            - La pagina pretende ser un lugar para subir proyectos o trabajos realizados a nivel educativo para que los interesados (empresas por ejemplo) puedan tener un ejemplo más claro del trabajo de los que apliquen a sus ofertas laborales. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-3">
                    <div class="text-sm text-muted">
                        <div class="flex align-content-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="text-muted" style="width: 18px">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="text-muted">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ms-4 text-muted" style="width: 18px">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="text-muted">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="text-sm text-muted">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
