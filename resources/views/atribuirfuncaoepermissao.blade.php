<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atribuir funções e permissões</title>
</head>
<body>
    <h2>Atribuir Roles e Permissões para {{ $user->name }}</h2>

<form action="{{ route('users.assign.save', $user->id) }}" method="POST">
    @csrf

    <h3>Funções</h3>
    @foreach($roles as $role)
        <label>
            <input type="checkbox" name="roles[]" value="{{ $role->name }}"
                   {{ $user->hasRole($role->name) ? 'checked' : '' }}>
            {{ $role->name }}
        </label><br>
    @endforeach

    <h3>Permissões</h3>
    @foreach($permissions as $permission)
        <label>
            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                   {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}>
            {{ $permission->name }}
        </label><br>
    @endforeach

    <button type="submit">Salvar</button>
</form>

</body>
</html>