<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuir Função a Permissão</title>
</head>
<body>
    <h2>Atribuir Função a Permissão</h2>
    <form method="POST" action="{{ route('funcao.atribuirpermissoes.store', $role->id) }}">
    @csrf
    @foreach($permissions as $permission)
        <label>
            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
            {{ $permission->name }}
        </label>
    @endforeach
    <button type="submit">Salvar Permissões</button>
</form>

</body>
</html>