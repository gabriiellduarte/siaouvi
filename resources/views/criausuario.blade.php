<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Usuário</title>
</head>
<body>
    <h1>Criar Usuário</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" required>
        </div>
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Criar</button>
    </form>
</body>
</html>