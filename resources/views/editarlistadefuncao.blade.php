<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <form action="{{ route('listadefuncao.update', $role->id) }}" method="POST">
      @csrf
      @method('PUT')
    <div class="mb-3">
      <label for="editar" class="form-label">Editar função</label>
      <input type="text" name="name" class="w-25 form-control" value="{{ $role->name }}" required>
      <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
  </form>
