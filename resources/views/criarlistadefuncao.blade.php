<h3>Lista de função:</h3>
<body>
  <form action="{{ route('listadefuncao.store') }}" method="POST">
    @csrf
    <label for="funcao">Nome da função</label>
    <input type="text" id="funcao" name="name" placeholder="Digite o nome da nova função " required>
    <button type="submit">Criar nova função</button>
    </form>
   <a href="{{ route(name: 'listadefuncao.index') }}">Voltar à lista de função</a>
 </body>
