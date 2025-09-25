<h3>Lista de função:</h3>
<table border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
  @foreach($roles as $role)
  <tr>
    <td>{{ $role->id }}</td>
    <td>{{ $role->name }}</td>
    <td><button><a href="{{ route('listadefuncao.edit', $role->id) }}">Editar função</a></button> 
      <button><a href="{{ route('funcao.atribuirpermissoes', $role->id) }}">Atribuir permissões</a></button>
    <form action="{{ route('listadefuncao.destroy', $role->id) }}" method="POST">
      @csrf
    @method('DELETE')
    <button type="submit">Excluir função</button></td>
   </form>
  </tr>
  @endforeach

  </tbody>

  <a href="{{ route('listadefuncao.create') }}">Criar nova função</a>
</table>