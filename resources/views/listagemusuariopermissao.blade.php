<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Usuários</title>
</head>
<body>
    <h2>Listagem de Usuários e Permissões</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Funções</th>
                <th>Permissões</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row"><a
                                    href="{{ route('usuarios.show', $user->id) }}">{{ $loop->index + 1 }}</a></th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>Funções</td>
                    <td>
                        @foreach ($user->getRoleNames() as $role)
                            <span>{{ $role }}</span>
                        @endforeach
                    </td>
                    <td>
                        <button>
                            <a href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
                        </button>
                        <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>