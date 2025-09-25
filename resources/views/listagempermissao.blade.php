<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Listagem de Permissões</h2>
    <table border="1" class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Permissão</th>
                <th>Guard Name</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->guard_name }}</td>
                    <td>
                        @can('editar permissão')
                        <button class="btn btn-dark"><a href="{{ route('permissoes.edit', $permission->id) }}">Editar</a></button>
                        @endcan
                        
                        <form action="{{ route('permissoes.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta permissão?');">
                            @csrf
                            @method('DELETE')
                        @can('excluir permissão')
                            <button type="submit" class="btn btn-dark">Excluir</button>
                        @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        @can('criar permissão')
        <button class="btn btn-dark"><a href="{{ route('permissoes.create', $permission->id) }}">Criar Permissão</a></button>
        @endcan
    </body>
</html>