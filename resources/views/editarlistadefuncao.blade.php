<h3>Lista de função:</h3>
<table border="1">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Permissões</th>
      <th>Ações</th>
    </tr>
  </thead>
  <form action="">
  <tbody>
  @foreach($roles as $role)
    <td>{{ $role->name }}</td>
  @endforeach
    <td><button>Lista de permissões</button></td>

  </tbody>
</form>
</table>