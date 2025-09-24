<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Listagem de Permissões</h2>
    <table border="1">
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
                        <a href="{{ route('permissoes.edit', $permission->id) }}">Editar</a>
                        <form action="{{ route('permissoes.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta permissão?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
</body>
</html>