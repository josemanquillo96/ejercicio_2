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

<form action="{{ route('client.update', $client) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('put')
    <label>
        codigo
        <br>
        <input type="text" name="codigo" value="{{ old('codigo', $client->codigo) }}">
    </label>
    <br>
    <label>
        numero social
        <br>
        <input type="text" name="num_social" value="{{ old('num_social', $client->num_social) }}">
    </label>
    <br>
    <label>
        titulo
        <br>
        <input type="text" name="telefono" value="{{ old('telefono', $client->telefono) }}">
    </label>
    <br>
    <label>
        domicilio
        <br>
        <input type="editorial" name="domicilio" value="{{ old('domicilio', $client->domicilio) }}">
    </label>
    <br>
        

    


    <br>

    <button type="submit">Enviar Formulario:</button>
</form>

</center>
</html>