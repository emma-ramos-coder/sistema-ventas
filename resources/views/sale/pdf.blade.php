<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Factura</title>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
    }

    #encabezado {
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 15px;
    }

    #fact {
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        border-radius: 5px;
        color: white;
        font-weight: bold;
        background: steelblue;
        padding: 0 20px;
        text-align: center;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #facliente {
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fac,
    #fv,
    #fa {
        color: #FFFFFF;
        font-size: 15px;
        text-align:center;
    }

    #facliente thead {
        padding: 20px;
        background:steelblue;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #facvendedor {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facvendedor thead {
        padding: 20px;
        background: steelblue;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #facproducto {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facproducto thead {
        padding: 20px;
        background: steelblue;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #proveedor {
        text-align: justify;
    }
    .borde-superior{
        border-top: 1px solid black;
    }
    td, th{
        padding: 4px;
    }
</style>
<body>
    <header>
        <div>
            <table id="datos">
                <thead>
                    <tr>
                        <td> <img src="img/logo.png" alt="logo" width="300px"></td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h4>DATOS DEL CLIENTE</h4>
                            <p class="dato-cliente">
                                Cliente: {{ $sale->customer->names }}
                                {{ $sale->customer->surnames }}<br>
                                Dni: {{ $sale->customer->document_number }}<br>
                                Teléfono: {{ $sale->customer->phone }}
                            </p>
                        </td>
                        <td class="proveedor">
                            <h4>DATOS DEL VENDEDOR</h4>
                            <p>Nombre: {{ $sale->user->name }}<br>
                                Email: {{ $sale->user->email }}</p>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td><h4>Fecha de la venta: </h4> </td>
                        <td>{{ $sale->invoice_date }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div id="fact">
            <p>FACTURA </p>
            <p> {{ $sale->id }}</p>
        </div>
    </header>
    <br>
    <br>
    <section>
        <div>
            <table id="facproducto">
                <thead>
                    <tr id="fa">
                        <th align="left">CANTIDAD</th>
                        <th align="left">PRODUCTO</th>
                        <th align="left">PRECIO VENTA (S/)</th>
                        <th align="right">SUBTOTAL (S/)</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($saleDetails as $saleDetail)
                        <tr >
                            <td align="center">{{ $saleDetail->quantity }}</td>
                            <td>{{ $saleDetail->article->description }}</td>
                            <td align="left">S/. {{ number_format($saleDetail->price,2) }}</td>
                            <td align="right">S/
                                {{ number_format($saleDetail->quantity * $saleDetail->price, 2) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3"  align="right">
                            SUBTOTAL:
                        </th>
                        <th class="borde-superior" align="right">
                            <?php $subtotal = $sale->total_invoice - $sale->igv ?>
                            S/ {{number_format($subtotal,2)}}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3" align="right">
                            IGV:
                        </th>
                        <th align="right">
                            S/ {{number_format($sale->igv,2)}}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="3" align="right">
                            TOTAL:
                        </th>
                        <th class="borde-superior" align="right">
                            S/ {{number_format($sale->total_invoice,2)}}
                        </th>
                    </tr>

                </tfoot>
            </table>
        </div>
    </section>
    <br>
    <br>
    <footer>
        <!--puedes poner un mensaje aqui-->
        <div id="datos">
            <p>
              Arequipa - Perú - 2023
            </p>
        </div>
    </footer>

</body>

</html>
