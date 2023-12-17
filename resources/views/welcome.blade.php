<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid p-2 mb-3">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="img/logo_s.PNG" alt="" width="100px">     SISTEMA DE VENTAS
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" >
                        @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link m-3">{{__('Home')}}</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link m-3">{{__('Login')}}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link m-3">{{__('Register')}}</a>
                            @endif
                        </li>
                        @endauth
                    @endif

                    </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container-fluid p-2 mb-3">
            <div class="mx-auto col-6 text-center shadow rounded-3 border">
                <img src="img/LogoDSI.jpg" width="90px" class="mt-4">
                <h1 class="h5 mt-4 p-2">INSTITUTO DE EDUCACIÓN SUPERIOR
                    “PEDRO P. DÍAZ” </h1>
                <h2 class="h5 p-2">PROGRAMA DE ESTUDIO:<br>
                    DESARROLLO DE SISTEMAS DE INFORMACIÓN
                    </h2>
                <h3 class="h5 p-2">UNIDAD DIDÁCTICA: <br>DESARROLLO WEB INTEGRADO</h3>
                <p>Integrantes:<br>
                    <span class="h3">E</span>duardo Jorge Cruz Taqquere<br>
                    <span class="h3">J</span>ack Anderson Peredo Vilca<br>
                        <span class="h3">E</span>mma Edith Ramos Calcina
                </p>
                <p>Turno: Diurno</p>
                <p>Profesor: Duilio Chávez Cuarite</p>
                <p class="mb-4">Arequipa - 2023</p>
            </div>


        </div>

    </body>
</html>
