<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="w-25 form-control" value="{{ $user->name }}" required>
        </div>
        <br>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="w-25 form-control" value="{{ $user->email }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-dark">Salvar</button>
        <br>
        <button class="btn btn-dark"><a href="{{ route('usuarios.index') }}">Voltar a lista de usuários</a></button>
    </form>
</body>
</html>