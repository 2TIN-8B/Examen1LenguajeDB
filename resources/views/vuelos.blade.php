<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuelos</title>
</head>
<body>
    <div class="container">
    <h1>Mantenimiento Vuelos</h1>
    <br>
    <a href="{{route('vuelo.crear')}}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Numero Vuelo</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Numero Asientos</th>
                <th colspan="4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vueloss as $vuelos)
                <tr>
                    <td>{{$vuelos -> numeroVuelo}}</td>
                    <td>{{$vuelos -> origen}}</td>
                    <td>{{$vuelos -> destino}}</td>
                    <td>{{$vuelos -> numeroAsientos}}</td>
                    <td>{{$vuelos -> fechaSalida}}</td>
                    <td>
                        <a href="{{ route('vuelo.editar', $vuelos->numeroVuelo) }}" class="btn btn-info">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route('vuelo.eliminar', $vuelos->numeroVuelo) }}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                <td>
                    <a>Agregar Asiento</a>
                </td>
                <td>
                    <a>Ver Asientos</a>
                </td>
            @endforeach
        </tbody>
        

    </table>
    </div>
</body>
</html>