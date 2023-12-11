@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info text-center p-3">
                                    <div class="inner">
                                        <h3><?php echo $total_productos; ?></h3>

                                        <h4>Articulos</h4>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-gift fa-3x"></i>
                                    </div>
                                    <a href="  {{route('articles.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success text-center p-3">
                                    <div class="inner">
                                        <h3><?php echo $total_clientes; ?></h3>

                                        <h4>Clientes</h4>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-user fa-3x"></i>
                                    </div>
                                    <a href=" {{ route('customers.index')}} " class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning text-center p-3">
                                    <div class="inner">
                                        <h3><?php echo $total_proveedores; ?></h3>

                                        <h4>Proveedores</h4>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-drivers-license-o fa-3x"></i>
                                    </div>
                                    <a href=" {{ route('suppliers.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger text-center p-3">
                                    <div class="inner">
                                        <h3><?php echo $total_ventas; ?></h3>

                                        <h4>Ventas</h4>
                                    </div>
                                    <div class="icon mb-3">
                                        <i class="fa fa-cart-plus fa-3x"></i>
                                    </div>
                                    <a href=" {{route('sales.index')}}" class="small-box-footer text-white">Ver Detalles <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    </div>
                </div>



        </div>
    </div>
</div>
@endsection
