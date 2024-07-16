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
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data" >
        @csrf {{-- token o seguridad  --}}
        <label  class="form-label">
            codigo
            <br>
            <input class="form-control" type="text" name="codigo"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            numero social
            <br>
            <input class="form-control" type="text" name="num_social"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            telefono
            <br>
            <input class="form-control" type="text" name="telefono"  class="form-control" required>
        </label>
        <br>
        <label  class="form-label">
            domicilio
            <br>
            <input class="form-control" type="text" name="domicilio"  class="form-control" required>
        </label>
    
        <br>
        
        <br>
        <button class="btn btn-primary" type="submit" >Enviar Formulario:</button>
    </form>
</center>
    
</body>
</html>