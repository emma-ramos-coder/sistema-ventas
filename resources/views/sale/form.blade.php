<div class="box box-info padding-1">
    <div class="box-body">
        <div class="mb-3 row">
            <div class="col form-group">
                {{ Form::label('Cliente') }}
                {{ Form::select('customer_id', $customers, $sale->customer_id, ['class' => 'form-control' . ($errors->has('customer_id') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
                {!! $errors->first('customer_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col form-group">
                {{ Form::label('Fecha de factura') }}
                <?php $fecha_actual = date("Y-m-d"); ?>
                {{ Form::date('invoice_date', $sale->invoice_date, ['class' => 'form-control' . ($errors->has('invoice_date') ? ' is-invalid' : ''), 'value' => $fecha_actual, 'placeholder' => 'Fecha de factura']) }}
                {!! $errors->first('invoice_date', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col form-group">
                {{ Form::label('Forma de pago') }}
                {{ Form::select('way_to_pay_id', $way_to_pays, $sale->way_to_pay_id, ['class' => 'form-control' . ($errors->has('way_to_pay_id') ? ' is-invalid' : ''), 'placeholder' => 'Forma de pago']) }}
                {!! $errors->first('way_to_pay_id', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col form-group">
                <label for="article_id">Artículo</label>
                <select class="form-control" name="article_id" id="article_id">
                    <option value="" selected disabled>--Seleccione un artículo--</option>
                    @foreach($articles as $article)
                    <option value="{{$article->id}}_{{$article->stock}}_{{$article->sale_price}}">{{$article->description}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col form-group">
                <label for="stock">Stock</label>
                <input type="text" id="stock" name="stock" class="form-control" disabled>
            </div>
            <div class="col form-group">
                <label for="quantity">Cantidad</label>
                <input type="number" id="quantity" name="quantity" class="form-control" min="1">
            </div>
            <div class="col form-group">
                <label for="price">Precio de venta</label>
                <input type="text" id="price" name="price" class="form-control"  disabled>
            </div>
        </div>
        <div class="box-footer mt-4">
            <button type="button" class="btn btn-primary" id="agregar">Registrar detalle</button>
        </div>
        <div class="form-group mt-4">
            <h4 class="card-title">Detalles de venta</h4>
            <div class="table-responsive col-md-12">
                <table id="detalles" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Eliminar</th>
                            <th>Artículo</th>
                            <th>Precio de venta (S/)</th>
                            <th>Cantidad</th>
                            <th class="text-end">Subtotal (S/)</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th colspan="4">
                                <p class="text-end">TOTAL (S/)</p>
                            </th>
                            <th>
                                <p class="text-end"> <span id="total">0.00</span> </p>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                <p class="text-end">IMPUESTO 18% (S/)</p>
                            </th>
                            <th>
                                <p class="text-end"> <span id="total_impuesto">0.00</span> </p>
                                <input type="hidden" name="igv" id="igv">
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">
                                <p class="text-end">TOTAL PAGAR (S/)</p>
                            </th>
                            <th>
                                <p class="text-end"> <span id="total_pagar_html">0.00</span>
                                <input type="hidden" name="total_invoice" id="total_invoice"> </p>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>

