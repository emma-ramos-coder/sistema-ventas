@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <div class="row m-2">
                            @can('articles.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info text-center p-3 shadow-sm border rounded-lg">
                                    <div class="inner">
                                        <h3><?php echo $total_productos; ?></h3>

                                        <h5>Articulos</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-gift fa-2x"></i>
                                    </div>
                                    <a href="  {{route('articles.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                            @can('customers.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success text-center p-3">
                                    <div class="inner">
                                        <h3><?php echo $total_clientes; ?></h3>

                                        <h5>Clientes</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-user fa-2x"></i>
                                    </div>
                                    <a href=" {{ route('customers.index')}} " class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                            @can('suppliers.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning text-center p-3 shadow-sm border rounded-lg">
                                    <div class="inner">
                                        <h3><?php echo $total_proveedores; ?></h3>

                                        <h5>Proveedores</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-drivers-license-o fa-2x"></i>
                                    </div>
                                    <a href=" {{ route('suppliers.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                            @can('sales.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger text-center p-3 shadow-sm border rounded-lg">
                                    <div class="inner">
                                        <h3><?php echo $total_ventas; ?></h3>

                                        <h5>Ventas</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-cart-plus fa-2x"></i>
                                    </div>
                                    <a href=" {{route('sales.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                        </div>
                        <!-- ./fila -->
                        <div class="row m-2 p-2"> </div>
                        <!-- ./fila -->
                        <div class="row m-2">
                            @can('document-types.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-primary text-center p-3 shadow-sm border rounded-lg">
                                    <div class="inner">
                                        <h3><?php echo $total_tipos_doc; ?></h3>

                                        <h5>T. de documentos</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-address-book-o fa-2x"></i>
                                    </div>
                                    <a href="  {{route('document-types.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                            @can('cities.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-secondary text-center p-3 shadow-sm border rounded-lg">
                                    <div class="inner">
                                        <h3><?php echo $total_ciudades; ?></h3>

                                        <h5>Ciudades</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-map-marker fa-2x"></i>
                                    </div>
                                    <a href=" {{ route('cities.index')}} " class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                            @can('item-types.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box text-white bg-dark text-center p-3 shadow-sm border rounded-lg">
                                    <div class="inner">
                                        <h3><?php echo $total_tipos_art; ?></h3>

                                        <h5>Tipos de artículo</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-archive fa-2x"></i>
                                    </div>
                                    <a href=" {{ route('item-types.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                            @can('way-to-pays.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-white text-center p-3 shadow-sm border rounded-lg">
                                    <div class="inner">
                                        <h3><?php echo $total_formas_pago; ?></h3>

                                        <h5>Formas de pago</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-usd fa-2x"></i>
                                    </div>
                                    <a href=" {{route('way-to-pays.index')}}" class="small-box-footer text-dark">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                        </div>
                        <!-- ./fila -->
                        <div class="row m-2  p-2"></div>
                        <!-- ./fila -->
                        <div class="row m-2">
                            @can('users.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box text-center p-3 shadow-sm border rounded-lg" style="background-color: orchid">
                                    <div class="inner">
                                        <h5>Roles por usuarios</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-users fa-2x"></i>
                                    </div>
                                    <a href="  {{route('users.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                            <!-- ./col -->
                            @can('roles.index')
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box text-center p-3 shadow-sm border rounded-lg" style="background-color: coral">
                                    <div class="inner">
                                        <h5>Permisos por rol</h5>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-user-secret fa-2x"></i>
                                    </div>
                                    <a href=" {{ route('roles.index')}} " class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            @endcan
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
