<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <center>
        <h1>projecto</h1>
        <a href="{{ route('project.create') }}" class="btn btn-primary " style="backgrand-color:red;">crear projecto</a>
        <br><br>
        <table class="table table-striped-columns" >
            <td>
                <h4>codigo
            </td>
            <td>
                <h4>cuantia
            </td>
            <td>
                <h4>descripcion
            </td>
            <td>
                <h4>fecha inicio
            </td>
            <td>
                <h4>fecha fin
            </td>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->codigo }}</td>
                    
                    <td>{{ $project->cuantia}}</td>
                    <td>{{ $project->descripcion}} </td>
                    <td>{{ $project->fecha_inicio}} </td>
                    <td>{{ $project->fecha_fin}} </td>
                    <td><a href="{{ route('project.show', $project->id) }}" style="text-decoration: none">Mostrar</a></td>
                    <td><a href="{{ route('project.edit', $project->id) }}" style="text-decoration: none">Editar</a></td>
                    <td>
                        <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>










