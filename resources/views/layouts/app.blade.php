<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @if(Auth::check())
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('File') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('document-types.index') }}">
                                {{ __('Document Type') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('cities.index') }}">
                                {{ __('City') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('item-types.index') }}">
                                {{ __('Item Type') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('way-to-pays.index') }}">
                                {{ __('Way To Pay') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('customers.index') }}">
                                {{ __('Customer') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('suppliers.index') }}">
                                {{ __('Supplier') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('articles.index') }}">
                                {{ __('Article') }}
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('Procesos') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('sales.index') }}">
                                {{ __('Sale') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('refunds.index') }}">
                                {{ __('Refund') }}
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ __('Consultas') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                                {{ __('Productos vendidos') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Precios de productos') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Productos sin stock') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Ventas por periodo') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Ventas por cliente') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Ventas por proveedor') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Clientes por ciudad') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Ventas por forma de pago') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Productos por categoria') }}
                            </a>
                            <a class="dropdown-item" href="#">
                                {{ __('Ventas por usuario') }}
                            </a>
                        </div>
                    </li>
                </ul>
                @endif

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">
                                    {{ __('Editar Perfil') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
</html>
