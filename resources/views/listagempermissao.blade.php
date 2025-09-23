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
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $permission->name }}</td>
                    <td>{{ $permission->guard_name }}</td>
                </tr>
            @endforeach
        </tbody>
        {{-- <form action="{{ route('permissions.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nome da permissão">
    <button type="submit">Criar</button>
</form> --}}
</body>
</html>