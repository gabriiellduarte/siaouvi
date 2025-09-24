<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Permissão</title>
</head>
<body>
    <h2>Criar Nova Permissão</h2>
    <form action="{{ route('permissoes.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome da permissão" required>
        <button type="submit">Criar</button>
    </form>
</body>
</html>