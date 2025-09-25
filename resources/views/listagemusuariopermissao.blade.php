<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

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
    <table border="1" class="table table-striped">
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
                    <th scope="row"><a href="{{ route('usuarios.show', $user->id) }}">{{ $loop->index + 1 }}</a></th>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>@foreach($user->roles as $role)
                            <span>{{ $role->name }}</span><br>
                        @endforeach
                    </td>
                    <td>
                        @foreach($user->permissions as $permission)
                            <span>{{ $permission->name }}</span><br>
                        @endforeach
                    </td>
                    <td>
                        @can('atribuir permissão a função')
                        <button><a href="{{ route('users.assign', $user->id) }}">Atribuir Permissão</a></button>
                        @endcan
                        @can('editar usuario')
                        <button>
                            <a href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
                        </button>
                        @endcan
                        <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            @can('excluir usuario')
                            <button type="submit">Excluir</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>