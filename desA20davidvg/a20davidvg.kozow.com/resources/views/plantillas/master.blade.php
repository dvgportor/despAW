<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="A20DavidVG">
    <meta name="generator" content="">
    @yield('title')
    

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

   
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <style type="text/css">
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            min-height: 75rem;
            padding-top: 4.5rem;
        }
       
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-blue fixed-top bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="../">Volver</a>
                    </li>
                    
                    
                    @yield('masopcionesmenu')
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="p-5 rounded">
            @yield('central')
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>