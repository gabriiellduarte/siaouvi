<!DOCTYPE html>
<html lang="en">
<head>

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
                    {{-- adicione mais opções --}}
                </select>
            </div>
            <div class="col">
                <select name="mostrar_anonimos" class="form-control">
                    <option value="">Todas</option>
                    <option value="1" {{ request('mostrar_anonimos')==='1'?'selected':'' }}>Somente anônimos</option>
                    <option value="0" {{ request('mostrar_anonimos')==='0'?'selected':'' }}>Somente identificados</option>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>

    {{-- tabela --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Data/Hora</th>
                <th>Anônimo?</th>
            </tr>
        </thead>
        <tbody>
        @forelse ($manifestacoes as $manifestacao)
            <tr>
                <td>{{ $manifestacao->id }}</td>
                <td>{{ $manifestacao->anonimo ? 'ANÔNIMO' : $manifestacao->nome }}</td>
                <td>{{ $manifestacao->anonimo ? '---' : $manifestacao->email }}</td>
                <td>{{ $manifestacao->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $manifestacao->anonimo ? 'Sim' : 'Não' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Nenhuma manifestação encontrada.</td>
            </tr>
        @endforelse
        </tbody>
    </table>

    {{ $manifestacoes->links() }}
</div>


</body>
</html>


    