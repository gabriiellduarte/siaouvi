<!DOCTYPE html>
<html lang="en">
<head>
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
                    <th scope="row"><a href="{{ route('usuarios.show', $user->id) }}">{{ $loop->index + 1 }}</a></th>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><select name="" id="">
                        <option value="selecione">Selecione a função...</option>
                        <option value="f1">Função 1</option>
                        <option value="f2">Função 2</option>
                        <option value="f3">Função 3</option>
                    </select>
                        {{-- @foreach ($user->roles as $role)
                            <span>{{ $role->name }}</span>
                        @endforeach --}}
                    </td>
                    <td>
                        @foreach ($user->getRoleNames() as $role)
                            <span>{{ $role }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('usuarios.edit', $user->id) }}">Editar</a>
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