<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Aula</title>
</head>
<body>
    
    <h1>Editar Aula</h1>
    <form action="{{ route('escuela22.update', $aulas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" value="{{ $aulas->codigo }}" required>
        <br>
        <label for="piso">Piso:</label>
        <input type="text" id="piso" name="piso" value="{{ $aulas->piso }}" required>
        <br>
        <label for="pupitres">Pupitres:</label>
        <input type="text" id="pupitres" name="pupitres" value="{{ $aulas->pupitres }}" required>
        <br>
        
        <button type="submit">Actualizar</button>
    </form>
    <a href="{{ route('escuela22.index') }}">Volver</a>

</body>
</html>