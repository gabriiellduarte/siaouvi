<!DOCTYPE html>
<html lang="en">
<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="../dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- filtros --}}
    <div class="container">
    <h2>Pesquisa de satisfação da página</h2>
    <form method="GET" action="{{ route('satisfacaodapag.index') }}" class="mb-3">
        <div class="row g-2">
            <div class="col">
                <input type="text" name="id" class="form-control" placeholder="id" value="{{ request('id') }}">
            </div>
            <div class="col">
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{ request('nome') }}">
            </div>
            <div class="col">
                <select name="pagina" class="form-control">
                    <option value="">Todas as páginas</option>
                    <option value="publicacoes.php" {{ request('pagina')==='publicacoes.php'?'selected':'' }}>Publicações</option>
                    <option value="campanha.php" {{ request('pagina')==='campanha.php'?'selected':'' }}>Campanha</option>
                    <option value="cartaservicos.php" {{ request('pagina')==='cartaservicos.php'?'selected':'' }}>Carta de Serviços</option>
                    <option value="unidadedesaude.php" {{ request('pagina')==='unidadedesaude.php'?'selected':'' }}>Unidade de Saúde</option>
                    <option value="servicos.php" {{ request('pagina')==='servicos.php'?'selected':'' }}>Serviços</option>
                    {{-- adicione mais opções --}}
                </select>
            </div>
            <div class="col">
            <div class="col d-flex align-items-center gap-2">
            <!-- Filtro por satisfação -->
            <option value="10" name="nota"><span  style="color:green; font-size:2em;">😁</span></option>
            <button type="submit" name="nota" value="10" class="btn-sem-estilo" title="Muito satisfeito">
                <span  style="color:green; font-size:2em;">😁</span>
            </button>
            <button type="submit" name="nota" value="8" class="btn-sem-estilo" title="Satisfeito">
                <span  style="color:lightgreen; font-size:2em;">😊</span>
            </button>
            <button type="submit" name="nota" value="6" class="btn-sem-estilo" title="Neutro">
                <span  style=" font-size:2em;">😐</span>
            </button>
            <button type="submit" name="nota" value="4" class="btn-sem-estilo" title="Neutro">
                <span  style=" font-size:2em;">☹️</span>
            </button>
            <button type="submit" name="nota" value="2" class="btn-sem-estilo" title="Insatisfeito">
                <span  style="color:red; font-size:2em;">😞</span>
            </button>
        </div>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
            
            
        </div>
        
    </form>
    {{-- tabela --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>visualizar</th>
                <th>Nota</th>
                <th>id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Pagina</th>
                <th>Data/Hora</th>
                
            </tr>
        </thead>
        <tbody>
        @forelse ($avaliacoes as $avaliacao)
            <tr>
                <td>
                    <button type="button" onclick="openModal({{ $avaliacao->id }})">Visualizar</button>
                </td>
                <td>
                    @if($avaliacao->nota >= 10)
                        <span  style="color:green; font-size:1.5em;">😁10</span>
                    @elseif($avaliacao->nota == 8)
                        <span  style="color:rgb(0, 255, 76); font-size:1.5em;">😊8</span>
                        @elseif ($avaliacao->nota <= 6)
                        <span style="color:orange; font-size: 1.5rem;">😐6</span>
                        @elseif ($avaliacao->nota <= 4)
                        <span style="color:rgb(255, 165, 0); font-size: 1.5rem;">☹️4</span>
                    @elseif ($avaliacao->nota <= 2)
                        <span  style="color:red; font-size:1.5em;">😞2</span>
                    @endif
                </td>
                <td>{{ $avaliacao->id }}</td>
                <td>{{ $avaliacao->anonimo ? 'ANÔNIMO' : $avaliacao->nome }}</td>
                <td>{{ $avaliacao->anonimo ? '---' : $avaliacao->email }}</td>
                <td>{{ $avaliacao->pagina }}</td>
                <td>{{ $avaliacao->created_at->format('d/m/Y H:i') }}</td>
            </tr>
            <!-- Modal para cada manifestação -->
            <div id="modal-{{ $avaliacao->id }}" class="modal-satisfacao" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.5); z-index:9999;">
                <div style="background:#fff; margin:10% auto; padding:20px; width:400px; position:relative;">
                    <h4>Informações da Manifestação</h4>
                    <p><strong>Nota:</strong> {{ $avaliacao->nota }}</p>
                    <p><strong>ID:</strong> {{ $avaliacao->id }}</p>
                    <p><strong>Nome:</strong> {{ $avaliacao->anonimo ? 'ANÔNIMO' : $avaliacao->nome }}</p>
                    <p><strong>E-mail:</strong> {{ $avaliacao->anonimo ? '---' : $avaliacao->email }}</p>
                    <p><strong>Data/Hora:</strong> {{ $avaliacao->created_at->format('d/m/Y H:i') }}</p>
                    <p><strong>Anônimo?</strong> {{ $avaliacao->anonimo ? 'Sim' : 'Não' }}</p>
                    <p>
    <strong>Satisfação:</strong>
    @if($avaliacao->nota >= 10)
        <span  style="color:green; font-size:2em;"></span>
    @elseif($avaliacao->nota == 8)
        <span  style="color:orange; font-size:2em;">😊</span>
    @elseif ($avaliacao->nota <= 6)
        <span  style="color:orange; font-size:2em;">😐</span>
        @elseif ($avaliacao->nota <= 4)
        <span style="color:red; font-size:2em;">☹️</span>
    @elseif ($avaliacao->nota <= 2)
        <span  style="color:red; font-size:2em;">😞</span>
    @endif
</p>
                    <textarea name="observacao" id="observacao-{{ $avaliacao->id }}"></textarea>
                    <button onclick="closeModal({{ $avaliacao->id }})">Fechar</button>
                </div>
            </div>
        @empty
            <tr>
                <td colspan="6">Nenhuma manifestação encontrada.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $avaliacoes->links() }}
</div>

<script>
function openModal(id) {
    document.getElementById('modal-' + id).style.display = 'block';
}
function closeModal(id) {
    document.getElementById('modal-' + id).style.display = 'none';
}
</script>
</body>
</html>


