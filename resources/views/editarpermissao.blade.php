<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Permissão</title>
</head>
<body>
    <h2>Editar Permissão</h2>
    <form action="{{ route('permissoes.update', $permission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $permission->name }}" required>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>