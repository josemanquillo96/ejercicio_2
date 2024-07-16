<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
<center>
    <h1>Actualizacion</h1>

<form action="{{ route('project.update', $project) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')
    <label>
        codigo
        <br>
        <input type="text" name="codigo" value="{{ old('codigo', $project->codigo) }}">
    </label>
    <br>
    <label>
        cuantia
        <br>
        <input type="number" name="cuantia" value="{{ old('cuantia', $project->cuantia) }}">
    </label>
    <br>
    <label>
        descripcion
        <br>
        <input type="text" name="descripcion" style="height: 100px" value="{{ old('descripcion', $project->descripcion) }}">
    </label>
    <br><br>
    <label>
        fecha inicio
        <br>
        <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', $project->fecha_inicio) }}">
    </label>
    <br>
    <label>
        fecha fin
        <br>
        <input type="date" name="fecha_fin" value="{{ old('fecha_fin', $project->fecha_fin) }}">
    </label>
    <br>
    <br>
    <br>
    <button type="submit">Enviar Formulario:</button>
</form>

</center>
</html>