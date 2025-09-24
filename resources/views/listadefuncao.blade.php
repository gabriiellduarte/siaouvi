<h3>Lista de função:</h3>
<table border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Permissões</th>
      <th>Ações</th>
    </tr>
  </thead>
  <form action="">
  <tbody>
  @foreach($roles as $role)
  <tr>
    <td>{{ $role->id }}</td>
    <td>{{ $role->name }}</td>
  </tr>
  @endforeach

  </tbody>
</form>
  <a href="{{ route('listadefuncao.create') }}">Criar nova função</a>
</table>