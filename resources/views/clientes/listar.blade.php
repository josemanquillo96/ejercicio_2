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
        <a href="{{ route('client.create') }}" class="btn btn-primary " style="backgrand-color:red;">registrar un cliente</a>
        <table class="table" >
            <td>
                <h4>codigo
            </td>
            <td>
                <h4>numero social
            </td>
            <td>
                <h4>telefono
            </td>
            <td>
                <h4>domicilio
            </td>
            @foreach ($clients as $client)
            
                <tr>
                    <td>{{ $client->codigo }}</td>
                    <td>{{ $client->num_social }}</td>
                    <td>{{ $client->telefono }}</td>
                    <td>{{ $client->domicilio }}</td>
                    
                    {{-- <td>{{ $book->descripcion }} </td> --}}
                    <td><a href="{{ route('client.show', $client->id) }}" style="text-decoration: none">Mostrar</a></td>
                    <td><a href="{{ route('client.edit', $client->id) }}" style="text-decoration: none">Editar</a></td>
                    <td>
                        <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
    
</body>
</html>