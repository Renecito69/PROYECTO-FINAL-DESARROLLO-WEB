<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Vehiculos</title>
</head>
<body>

    <h4 class="text-center">Listado De Vehiculos</h4>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Placa</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Modelo</th>
                <th>CC</th>
                <th>Año</th>
                <th>Kilometraje</th>
                <th>Tipo de Combustible</th>
                <th>Último Mantenimiento</th>
                <th>Tipo de Vehículo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculos as $vehiculo)
            <tr>
                <td class="v-align-middle">{{$vehiculo->placa}}</td>
                <td class="v-align-middle">{{$vehiculo->marca}}</td>
                <td class="v-align-middle">{{$vehiculo->color}}</td>
                <td class="v-align-middle">{{$vehiculo->modelo}}</td>
                <td class="v-align-middle">{{$vehiculo->cc}}</td>
                <td class="v-align-middle">{{$vehiculo->año}}</td>
                <td class="v-align-middle">{{$vehiculo->kilometraje}}</td>
                <td class="v-align-middle">{{$vehiculo->tipo_combustible}}</td>
                <td class="v-align-middle">{{$vehiculo->ultimo_mantenimiento}}</td>
                <td class="v-align-middle">{{$vehiculo->tipo_vehiculo}}</td>
                <td class="v-align-middle">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
