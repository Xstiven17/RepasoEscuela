<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Aula</title>
</head>
<body>
    <h1>Crear Aula</h1>

    <form action="{{ route('escuela22.store') }}" method="POST">
        @csrf
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>
        <br>
        <label for="piso">Piso:</label>
        <input type="text" id="piso" name="piso" required>
        <br>
        <label for="pupitres">Pupitres:</label>
        <input type="text" id="pupitres" name="pupitres" required>
        <br>
        
        <button type="submit">Crear</button>
    </form>
    <a href="{{ route('escuela22.index') }}">Volver</a>

</body>
</html>
