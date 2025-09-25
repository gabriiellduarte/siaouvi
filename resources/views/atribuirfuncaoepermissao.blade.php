<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

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
    <div class="mb-3">
        <label>
            <input type="checkbox" name="roles[]" form="form-check-input" value="{{ $role->name }}"
                   {{ $user->hasRole($role->name) ? 'checked' : '' }}>
            {{ $role->name }}
        </label><br>
    </div>
    @endforeach

    <h3>Permissões</h3>
    @foreach($permissions as $permission)
    <div class="mb-3"></div>
        <label>
            <input type="checkbox" name="permissions[]" class="form-check-input" value="{{ $permission->name }}"
                   {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}>
            {{ $permission->name }}
        </label><br>
    @endforeach
    </div>
    <button type="submit" class="btn btn-dark">Salvar</button>
    <br>
    <button class="btn btn-dark"><a href="{{ route('usuarios.index') }}">Voltar a lista de usuários</a></button>
</form>

</body>
</html>