<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <br><br>
        <h1>Projecto</h1>
        <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
            @csrf {{-- token o seguridad  --}}
            <label class="form-label">
                codigo
                <br>
                <input class="form-control" type="text" name="codigo" class="form-control" required>
            </label>
            <br>
            <label class="form-label">
                cuantia
                <br>
                <input class="form-control" type="number" name="cuantia" class="form-control" required>
            </label>
            <br>
            <label class="form-label">
                descripcion
                <br>
                <input class="form-control " style="height: 100px" type="text" name="descripcion"
                    class="form-control" required>
            </label>
            <br><br>
            <label class="form-label">
                fecha de inicio
                <br>
                <input class="form-control" type="date" name="fecha_inicio" class="form-control" required>
            </label>
            <br>
            <label class="form-label">
                fecha fin
                <br>
                <input class="form-control" type="date" name="fecha_fin" class="form-control" required>
            </label><br><br>
            {{-- <label  class="form-label">
            cliente
            <br>
            <input class="form-control" type="text" name="client_id"  class="form-control" required>
        </label> --}}
            <br>
            <br>
            <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
        </form>
    </center>
</body>

</html>
