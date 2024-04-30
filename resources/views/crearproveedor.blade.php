<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
</head>
<body>
    <h2>Crear Proveedor</h2>
    <br>
    <form action='{{route('producto.guardar')}}' method="POST">
        @csrf
        <div>
            <label>nombre</label>
            <input type="text" name="nombre">
        </div>
        <br>
        <div>
            <label>fecharegistro</label>
            <input type="text" name="fecharegistro">
        </div>
        <br>
        <div>
            <label>telefono</label>
            <input type="text" name="telefono">
        </div>
        <br>
        <div>
            <label>correo</label>
            <input type="text" name="correo">
        </div>
        <br>
        <div class="form-group">
            <a href="{{route('principal.index')}}" class="btn btn-warning">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>                        
        </div>
    </form>
</body>
</html>