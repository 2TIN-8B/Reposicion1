<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Empleado</title>
</head>
<body>
    <h1>Ver Empleado</h1>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID Empleado</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>fechaingreso</th>
                <th>salario</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empelados as $empleado)
                <tr>
                    <td>{{$empleado -> idprestamo}}</td>
                    <td>{{$empleado -> nombre}}</td>
                    <td>{{$empleado -> apellido}}</td>
                    <td>{{$empleado -> fechaingreso}}</td>
                    <td>{{$empleado -> salario}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="form-group">
        <a href="{{route('principal.index')}}" class="btn btn-warning">Volver</a>                     
    </div>
</body>
</html>