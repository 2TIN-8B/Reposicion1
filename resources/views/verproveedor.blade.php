<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Proveedor</title>
</head>
<body>
    <h1>Ver Proveedor</h1>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>idproveedor</th>
                <th>Nombre</th>
                <th>fecharegistro</th>
                <th>telefono</th>
                <th>correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <td>{{$proveedor -> idproveedor}}</td>
                    <td>{{$proveedor -> nombre}}</td>
                    <td>{{$proveedor -> fecharegistro}}</td>
                    <td>{{$proveedor -> telefono}}</td>
                    <td>{{$proveedor -> correo}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="form-group">
        <a href="{{route('principal.index')}}" class="btn btn-warning">Volver</a>                     
    </div>
</body>
</html>