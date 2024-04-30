<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>
    <h2>Crear Producto</h2>
    <br>
    <form action='{{route('producto.guardar')}}' method="POST">
        @csrf
        <div>
            <label>descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <br>
        <div>
            <label>precio</label>
            <input type="text" name="precio">
        </div>
        <br>
        <div>
            <label>stock</label>
            <input type="text" name="stock">
        </div>
        <br>
        <div>
            <label>pagaisv</label>
            <input type="text" name="pagaisv">
        </div>
        <br>
        <div class="form-group">
            <a href="{{route('principal.index')}}" class="btn btn-warning">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>                        
        </div>
    </form>
</body>
</html>