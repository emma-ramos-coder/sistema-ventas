@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? "{{ __('Show') __('Sale')" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} {{__('Sale')}}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-3 form-group">
                                <strong>Cliente:</strong>
                                {{ $sale->customer->surnames }},
                                {{ $sale->customer->names }} <br>
                                <strong>DNI:</strong>
                                {{ $sale->customer->document_number }}

                            </div>
                            <div class="col-md-3 form-group">
                                <strong>Vendedor:</strong>
                                {{ $sale->user->name }}
                            </div>
                            <div class="col form-group text-center">
                                <strong>Forma de pago:</strong>
                                {{ $sale->wayToPay->way_to_pay_description }}
                            </div>
                            <div class="col form-group text-center">
                                <strong>Fecha factura:</strong>
                                {{ $sale->invoice_date }}
                            </div>
                            <div class="col form-group text-center">
                                <strong>Numero de venta:</strong>
                                {{ $sale->id }}
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="table-responsive col-md-12 table-bordered shadow mt-4 mx-auto">
                            <table id="saleDetails" class="table table-striped">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th>Artículo</th>
                                        <th class="text-end">Precio Venta (S/)</th>
                                        <th class="text-center">Cantidad</th>
                                        <th class="text-end">SubTotal(S/)</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">
                                            <p class="text-end">SUBTOTAL:</p>
                                        </th>
                                        <th>
                                            <p class="text-end">S/ {{number_format($subtotal,2)}}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <p class="text-end">IGV:</p>
                                        </th>
                                        <th>
                                            <p class="text-end">S/ {{number_format($sale->igv,2)}}</p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <p class="text-end">TOTAL:</p>
                                        </th>
                                        <th>
                                            <p class="text-end">S/ {{number_format($sale->total_invoice,2)}}</p>
                                        </th>
                                    </tr>

                                </tfoot>
                                <tbody>
                                    @foreach($saleDetails as $saleDetail)
                                    <tr>
                                        <td>{{$saleDetail->article->description}}</td>
                                        <td class="text-end">S/ {{number_format($saleDetail->price,2)}}</td>
                                        <td class="text-center">{{$saleDetail->quantity}}</td>
                                        <td class="text-end">S/ {{number_format($saleDetail->quantity*$saleDetail->price,2)}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
