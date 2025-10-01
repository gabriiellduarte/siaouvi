<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<body>
  

<h3>Lista de função:</h3>
<table border="1" class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  @forelse($roles as $role)
  <tr>
<<<<<<< HEAD
    <td>{{ $role->id }}</td>
    <td>{{ $role->name }}</td>
    <td><button><a href="{{ route('listadefuncao.edit', $role->id) }}">Editar função</a></button> 
      <button><a href="{{ route('funcao.atribuirpermissoes', $role->id) }}">Atribuir permissões</a></button>
    <form action="{{ route('listadefuncao.destroy', $role->id) }}" method="POST">
=======
      <td>{{ $role->id }}</td>
      <td>{{ $role->name }}</td>
      @can('editar função')
      <td><button class="btn btn-dark"><a href="{{ route('listadefuncao.edit', $role->id) }}">Editar função</a></button> 
      @endcan
      <form action="{{ route('listadefuncao.destroy', $role->id) }}" method="POST">
>>>>>>> gustavo
      @csrf
      @method('DELETE')
      @can('excluir função')
      <button type="submit" class="btn btn-dark">Excluir função</button></td>
      @endcan
  </form>
  </tr>
      @empty
  <tr>
      <td colspan="4">Nenhuma função registrada.</td>
  </tr>
  @endforelse

  </tbody>
  @can('criar função')
  <button class="btn btn-dark"><a href="{{ route('listadefuncao.create') }}">Criar nova função</a></button>
  @endcan
</table>
</body>