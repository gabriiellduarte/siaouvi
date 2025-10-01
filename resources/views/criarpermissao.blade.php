<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Permissão</title>
</head>
<body>
    <form action="{{ route('permissoes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
        <label for="criar" class="form-label">Criar permissão</label>
        <input type="text" name="name" class="w-25 form-control" placeholder="Nome da permissão" required>
        <button type="submit" class="btn btn-dark">Criar</button>
        </div>
    </form>
     <button class="btn btn-dark"><a href="{{ route('permissoes.index') }}">Ir para listagem</a></button>
</body>
</html>