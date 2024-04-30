<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    <h2>Crear Empleado</h2>
    <br>
    <form action='{{route('empleado.guardar')}}' method="POST">
        @csrf
        <div>
            <label>nombre</label>
            <input type="text" name="nombre">
        </div>
        <br>
        <div>
            <label>apellido</label>
            <input type="text" name="apellido">
        </div>
        <br>
        <div>
            <label>fechaingreso</label>
            <input type="text" name="fechaingreso">
        </div>
        <br>
        <div>
            <label>salario</label>
            <input type="text" name="salario">
        </div>
        <br>
        <div class="form-group">
            <a href="{{route('principal.index')}}" class="btn btn-warning">Volver</a>
            <button type="submit" class="btn btn-success">Guardar</button>                        
        </div>
    </form>
</body>
</html>