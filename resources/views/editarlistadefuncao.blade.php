<h3>Editar função</h3>

  <form action="{{ route('listadefuncao.update', $role->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $role->name }}" required>
    <button type="submit">Atualizar</button>
  
</form>
</table>