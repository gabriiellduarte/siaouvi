<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<body>
  <form action="{{ route('listadefuncao.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="funcaoFormControl" class="form-label">Nome da função</label>
      <input type="text" id="funcao" name="name" class="w-25 form-control" placeholder="Digite o nome da nova função " required>
      <button type="submit" class="btn btn-dark">Criar nova função</button>
    </div>
  </form>
</body>
