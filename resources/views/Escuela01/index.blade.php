<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Principal</title>
</head>
<body>

    <h1>Aulas</h1>
    <a href="{{ route('escuela22.create') }}">Crear Aula</a>
    <ul>
        @foreach ($aulas as $aula)
            <li>
                <a href="{{ route('escuela22.show', $aula->id) }}">{{ $aula->codigo }}</a>
                <a href="{{ route('escuela22.edit', $aula->id) }}">Editar</a>
                <form action="{{ route('escuela22.destroy', $aula->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>

</body>
</html>