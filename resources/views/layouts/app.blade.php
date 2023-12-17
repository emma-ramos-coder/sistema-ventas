<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema de Ventas</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @push('scripts')
        <script src="{{ asset('js/mi-script.js') }}"></script>
    @endpush
    @stack('scripts')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
                <img src="img/logo_s.PNG" alt="" width="100px">     SISTEMA DE VENTAS
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @if(Auth::check())
                <ul class="navbar-nav p-3">

                    <li class="nav-item dropdown px-4">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-cog fa-lg"></i>  {{ __('File') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @can('document-types.index')
                                <a class="dropdown-item" href="{{ route('document-types.index') }}">
                                <i class="fa fa-address-book-o fa-lg fa-fw"></i>  {{ __('Document Type') }}
                            </a>
                            @endcan
                            @can('cities.index')
                                <a class="dropdown-item" href="{{ route('cities.index') }}">
                                    <i class="fa fa-map-marker fa-lg fa-fw"></i>  {{ __('City') }}
                                </a>
                            @endcan
                            @can('item-types.index')
                                <a class="dropdown-item" href="{{ route('item-types.index') }}">
                                    <i class="fa fa-archive fa-lg fa-fw"></i>  {{ __('Item Type') }}
                                </a>
                            @endcan
                            @can('way-to-pays.index')
                                <a class="dropdown-item" href="{{ route('way-to-pays.index') }}">
                                    <i class="fa fa-usd fa-lg fa-fw"></i>  {{ __('Way To Pay') }}
                                </a>
                            @endcan
                            @can('customers.index')
                                <a class="dropdown-item" href="{{ route('customers.index') }}">
                                    <i class="fa fa-user fa-lg fa-fw"></i>  {{ __('Customer') }}
                                </a>
                            @endcan
                            @can('suppliers.index')
                                <a class="dropdown-item" href="{{ route('suppliers.index') }}">
                                    <i class="fa fa-id-card-o fa-lg fa-fw"></i>  {{ __('Supplier') }}
                                </a>
                            @endcan
                            @can('articles.index')
                                <a class="dropdown-item" href="{{ route('articles.index') }}">
                                    <i class="fa fa-gift fa-lg fa-fw"></i>  {{ __('Article') }}
                                </a>
                            @endcan
                            @can('users.index')
                                <a class="dropdown-item" href="{{ route('users.index') }}">
                                    <i class="fa fa-users fa-lg fa-fw"></i>  {{ __('Roles por Usuario') }}
                                </a>
                            @endcan
                            @can('roles.index')
                                <a class="dropdown-item" href="{{ route('roles.index') }}">
                                    <i class="fa fa-user-secret fa-lg fa-fw"></i>  {{ __('Permisos por Rol') }}
                                </a>
                            @endcan

                        </div>
                    </li>

                    <li class="nav-item dropdown px-4">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class="fa fa-cart-arrow-down fa-lg fa-fw"></i>  {{ __('Procesos') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @can('sales.index')
                                <a class="dropdown-item" href="{{ route('sales.index') }}">
                                    <i class="fa fa-shopping-cart fa-lg fa-fw"></i>  {{ __('Sale') }}
                                </a>
                            @endcan
                            {{-- @can('refunds.index')
                                <a class="dropdown-item" href="{{ route('refunds.index') }}">
                                    <i class="fa fa-mail-reply fa-lg fa-fw"></i>  {{ __('Refund') }}
                                </a>
                            @endcan --}}
                        </div>
                    </li>
                    <li class="nav-item dropdown px-4">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <i class='fa fa-bar-chart fa-lg fa-fw'></i>  {{ __('Consultas') }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @can('reportes.r1')
                                <a class="dropdown-item" href=" {{ route('reportes.r1') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Artículos vendidos') }}
                                </a>
                            @endcan
                            @can('reportes.r2')
                                <a class="dropdown-item" href=" {{ route('reportes.r2') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Precios de artículos') }}
                                </a>
                            @endcan
                            @can('reportes.r3')
                                <a class="dropdown-item" href=" {{ route('reportes.r3') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Artículos sin stock') }}
                                </a>
                            @endcan
                            @can('reportes.r4')
                                <a class="dropdown-item" href=" {{ route('reportes.r4') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Ventas por día') }}
                                </a>
                            @endcan
                            @can('reportes.r5')
                                <a class="dropdown-item" href=" {{ route('reportes.r5') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw "></i>  {{ __('Ventas por cliente') }}
                                </a>
                            @endcan
                            @can('reportes.r6')
                                <a class="dropdown-item" href=" {{ route('reportes.r6') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Ventas por proveedor') }}
                                </a>
                            @endcan
                            @can('reportes.r7')
                                <a class="dropdown-item" href=" {{ route('reportes.r7') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Clientes por ciudad') }}
                                </a>
                            @endcan
                            @can('reportes.r8')
                                <a class="dropdown-item" href=" {{ route('reportes.r8') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Ventas por forma de pago') }}
                                </a>
                            @endcan
                            @can('reportes.r9')
                                <a class="dropdown-item" href=" {{ route('reportes.r9') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Artículos por categoria') }}
                                </a>
                            @endcan
                            @can('reportes.r10')
                                <a class="dropdown-item" href=" {{ route('reportes.r10') }} ">
                                    <i class="fa fa-file-pdf-o fa-lg fa-fw"></i>  {{ __('Ventas por usuario') }}
                                </a>
                            @endcan
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
                                {{-- <a class="dropdown-item" href="#">
                                    {{ __('Editar Perfil') }}
                                </a> --}}
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
