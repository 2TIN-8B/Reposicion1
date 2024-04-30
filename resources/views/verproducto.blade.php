<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver Producto</title>
</head>
<body>
    <h1>Ver Producto</h1>
    <br><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>pagaisv</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{$producto -> id}}</td>
                    <td>{{$producto -> nombre}}</td>
                    <td>{{$producto -> precio}}</td>
                    <td>{{$producto -> stock}}</td>
                    <td>{{$producto -> pagaisv}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="form-group">
        <a href="{{route('principal.index')}}" class="btn btn-warning">Volver</a>                     
    </div>
</body>
</html>