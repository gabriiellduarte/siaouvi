<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div>
        <header class="filtro-header">
            <div>
                <h2>opções de filtragem</h2>
                <form action="{{ route('dashboardouvi') }}" method="GET" class="p-3 border rounded bg-light">
    <div >
        <div class="row valign-wrapper">
                    <!-- Início e Fim -->
        <div class="filtro-group">
            <label for="inicio" class="filtro-label">Início</label>
            <input type="date" id="inicio" name="filter[inicio]" class="filtro-input" autocomplete="off" value="{{ request('filter.inicio') }}">
        </div>
        <div class="filtro-group">
            <label for="fim" class="filtro-label">Fim</label>
            <input type="date" id="fim" name="filter[fim]" class="filtro-input" autocomplete="off"value="{{ request('filter.fim') }}">
        </div>

        <!-- Protocolo -->
        <div class="filtro-group">
            <label for="protocolo" class="filtro-label">Protocolo</label>
            <input type="text" id="protocolo" name="filter[protocolo]" class="filtro-input" autocomplete="off" value="{{ request('filter.protocolo') }}">
        </div>

        <!-- Nome -->
        <div class="col-md-3">
            <label for="nome" class="filtro-label">Nome</label>
            <input type="text" id="nome" name="filter[nome]" class="filtro-input" autocomplete="off" value="{{ request('filter.nome') }}">
        </div>

        <!-- Mensagem -->
        <div class="col-md-3">
            <label for="mensagem" class="filtro-label">Mensagem</label>
            <input type="text" id="mensagem" name="filter[mensagem]" class="filtro-input" autocomplete="off" value="{{ request('filter.mensagem') }}">
        </div>

        <!-- Secretaria -->
        <div class="col-md-3">
            <label for="secretaria" class="filtro-label">Secretaria</label>
            <input type="text" id="secretaria" name="filter[secretaria]" class="filtro-input" autocomplete="off" value="{{ request('filter.secretaria') }}">
        </div>

        <!-- Origem -->
        <div class="filtro-group">
            <label for="origem" class="filtro-label">Origem</label>
            <select id="origem" name="filter[origem]" class="filtro-select" value="{{ request('filter.origem') }}">
                <option value="">Selecione</option>
                <option value="interna" {{ request('filter.origem') == 'interna' ? 'selected' : '' }}>Interna</option>
                <option value="externa" {{ request('filter.origem') == 'externa' ? 'selected' : '' }}>Externa</option>
            </select>
        </div>

        <!-- Natureza -->
        <div class="filtro-group">
            <label for="natureza" class="filtro-label">Natureza</label>
            <select id="natureza" name="filter[natureza]" class="filtro-select" value="{{ request('filter.natureza') }}">
                <option value="">Selecione</option>
                <option value="administrativo" {{ request('filter.natureza') == 'administrativo' ? 'selected' : '' }}>Administrativo</option>
                <option value="juridico" {{ request('filter.natureza') == 'juridico' ? 'selected' : '' }}>Jurídico</option>
            </select>
        </div>

        <!-- Situação -->
        <div class="filtro-group">
            <label for="situacao" class="filtro-label">Situação</label>
            <select id="situacao" name="filter[situacao]" class="filtro-select" value="{{ request('filter.situacao') }}">
                <option value="em_tramitacao" {{ request('filter.situacao') == 'em_tramitacao' ? 'selected' : '' }}>EM TRAMITAÇÃO</option>
                <option value="concluido" {{ request('filter.situacao') == 'concluido' ? 'selected' : '' }}>Concluído</option>
                <option value="pendente" {{ request('filter.situacao') == 'pendente' ? 'selected' : '' }}>Pendente</option>
            </select>
        </div>

        <!-- Anexo -->
        <div class="filtro-group">
            <label for="anexo" class="filtro-label">Anexo?</label>
            <select id="anexo" name="filter[anexo]" class="filtro-select" value="{{ request('filter.anexo') }}">
                <option value="">Selecione</option>
                <option value="sim" {{ request('filter.anexo') == 'sim' ? 'selected' : '' }}>Sim</option>
                <option value="nao" {{ request('filter.anexo') == 'nao' ? 'selected' : '' }}>Não</option>
            </select>
        </div>

        <!-- Movimentação -->
        <div class="filtro-group">
            <label for="movimentacao" class="filtro-label">Movimentação</label>
            <select id="movimentacao" name="filter[movimentacao]" class="filtro-select" value="{{ request('filter.movimentacao') }}">
                <option value="">Selecione</option>
                <option value="entrada" {{ request('filter.movimentacao') == 'entrada' ? 'selected' : '' }}>Entrada</option>
                <option value="saida" {{ request('filter.movimentacao') == 'saida' ? 'selected' : '' }}>Saída</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn-filtrar">Filtrar</button>
    <!-- Mais filtros -->
    <div class="mt-3">
        <button type="button" class="btn btn-secondary">
            <i class="bi bi-funnel-fill"></i> Mais filtros
        </button>
    </div>
        </div>

</form>

            </div>
    </header>
    </div>
    

    <div class="col-md-10- offset-md-1 dashboard-title-container">
        <div class="col-md-10- offset-md-1 dashboard-title-container">
            <h1>Manifestações enviadas</h1>
        </div>
        <div class="col-md-10- offset-md-1 dashboard-table-container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($manifestacoes as $manifestacao)
                        <tr>
                            <th scope="row"><a href="{{ route('ouvidoria.show', $manifestacao->id) }}">{{ $loop->index + 1 }}</a></th>

                            <td>{{ $manifestacao->nome }}</td>
                            <td>{{ $manifestacao->cpf }}</td>
                            <td>{{ $manifestacao->data_nascimento }}</td>
                            <td>{{ $manifestacao->sexo }}</td>
                            <td>
                                <button><a href="{{ route('ouvidoria.edicao', $manifestacao->id) }}">Editar</a></button>
                                <form action="{{ route('ouvidoria.destroy', $manifestacao->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @if(isset($manifestacoes) && $manifestacoes->count() > 0)
        <p>Você tem {{ $manifestacoes->count() }} manifestações enviadas.</p>
    @else
        <p>Nenhuma manifestação enviada.
            <a href="{{ route('ouvidoria.form') }}">Clique aqui</a> para enviar uma nova manifestação.
        </p>
    @endif
    
</body>

</html>