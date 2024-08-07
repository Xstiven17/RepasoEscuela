<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aulas</title>
</head>
<body>

    <h1>{{ $aulas->codigo }}</h1>
    <p><strong>Código:</strong> {{ $aulas->codigo }}</p>
    <p><strong>Piso:</strong> {{ $aulas->piso }}</p>
    <p><strong>Pupitres:</strong> {{ $aulas->pupitres }}</p>
    <a href="{{ route('escuela22.edit', $aulas->id) }}">Editar</a>
    <a href="{{ route('escuela22.index') }}">Volver</a>

</body>
</html>
