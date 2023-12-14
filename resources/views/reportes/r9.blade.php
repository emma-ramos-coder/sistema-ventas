<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos por Categoria</title>
    <style>
        body {
            position: relative;
            width: 17cm;
            height: 25cm;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 12px;
            font-family: Arial;
        }
        #logo {
            text-align: left;
            margin-bottom: 10px;
            width:15%;
            float: left;
        }

        #logo img {
            width: 120px;
            float: left;
        }

        h2 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color:#000000;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 10px;
            font-family: Arial, sans-serif;
            font-size: 18px;
            padding: 10px;
        }
        p{
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 13px;
        }
        table{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <div id="logo"> <img src="img/logo_s.png" alt="logo DSI"> </div>
    <h2>Productos por Categoria</h2>
    <p>Reporte de productos ordenados alfabeticamente por categoria</p>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th align="right">Precio de venta</th>
            <th align="right">Stock</th>
            <th align="center">Tipo de artículo</th>
        </tr>
        @foreach($productos as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->description }}</td>
            <td align="right">{{ $p->sale_price }}</td>
            <td align="right">{{ $p->stock }}</td>
            <td align="center">{{ $p->item_type_description }}</td>

        </tr>
        @endforeach
    </table>
</body>
</html>
