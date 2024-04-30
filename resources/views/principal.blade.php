<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
</head>
<body>
    <h1>Seleccione una opcion</h1>

    <a href="{{route('empleado.crear')}}" class="btn btn-primary">Crear Empleado</a><br><br>
    <a href="{{route('producto.crear')}}" class="btn btn-primary">Crear Producto</a><br><br>
    <a href="{{route('proveedor.crear')}}" class="btn btn-primary">Crear Proveedor</a><br><br>

    <a href="{{route('empleado.mostrar')}}" class="btn btn-primary">Mostrar Empleado</a><br><br>
    <a href="{{route('producto.mostrar')}}" class="btn btn-primary">Mostrar Producto</a><br><br>
    <a href="{{route('proveedor.mostrar')}}" class="btn btn-primary">Mostrar Proveedor</a><br><br>

</body>
</html>