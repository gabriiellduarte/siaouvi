<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Permissão</title>
</head>
<body>
    <form action="{{ route('permissoes.update', $permission->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label for="editar" class="form-label">Editar permissão</label>
        <input type="text" name="name" class="w-25 form-control" value="{{ $permission->name }}" required>
        <button type="submit"  class="btn btn-dark">Atualizar</button>
        </div>
    </form>
    <button class="btn btn-dark"><a href="{{ route('permissoes.index') }}">Voltar a lista de permissões</a></button>
</body>
</html>