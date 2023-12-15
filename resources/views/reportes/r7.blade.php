<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes por ciudad</title>
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
            width: 130px;
            float: left;
            padding: 7px;
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
    <h2>Clientes por ciudad</h2>
    <p>Reporte de clientes por ciudad</p>
    <br><br>
    <table>
        <tr>
            <th>ID</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th>Ciudad</th>
        </tr>
        @foreach($clientes as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->surnames }}</td>
            <td>{{ $c->names }}</td>
            <td>{{ $c->document_number }}</td>
            <td>{{ $c->city_name }}</td>

        </tr>
        @endforeach
    </table>
</body>
</html>
