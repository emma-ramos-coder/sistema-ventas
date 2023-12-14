<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas por usuario</title>
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
    <h2>Ventas por usuario</h2>
    <p>Reporte de las ventas realizadas por los usuarios del sistema</p>
    <br><br>
    <table>
        <tr>
            <th>Usuario</th>
            <th align="right">Monto de ventas (S/)</th>
        </tr>
        @foreach($ventas as $v)
        <tr>
            <td>{{ $v->name }}</td>
            <td align="right">{{ $v->total }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
