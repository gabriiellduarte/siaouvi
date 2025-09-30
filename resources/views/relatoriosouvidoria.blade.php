<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios - Ouvidoria</title>
</head>

<body>
    <div>
        <header class="filtro-header">
            <div>
                <h2>opções de filtragem</h2>
                <form action="{{ route('relatorios.ouvidoria') }}" method="GET" class="p-3 border rounded bg-light">
                    <div>
                        <div class="row valign-wrapper">
                            <div>
                                <label for="anonimo" class="filtro-label">Anônimo:</label>
                                <select id="anonimo" name="filter[anonimo]" class="filtro-select">
                                    <option value="">Selecione</option>
                                    <option value="1" {{ request('filter.anonimo') == 'sim' ? 'selected' : '' }}>Sim
                                    </option>
                                    <option value="0" {{ request('filter.anonimo') == 'nao' ? 'selected' : '' }}>Não
                                    </option>
                                </select>
                            </div>
                            <!-- Início e Fim -->
                            <div class="filtro-group">
                                <label for="inicio" class="filtro-label">Início:</label>
                                <input type="date" id="inicio" name="filter[inicio]" class="filtro-input"
                                    autocomplete="off" value="{{ request('filter.inicio') }}">
                            </div>
                            <div class="filtro-group">
                                <label for="fim" class="filtro-label">Fim:</label>
                                <input type="date" id="fim" name="filter[fim]" class="filtro-input" autocomplete="off"
                                    value="{{ request('filter.fim') }}">
                            </div>

                            <!-- Secretaria -->
                            <div class="col-md-3">
                                <label for="secretaria" class="filtro-label">Secretaria:</label>
                                <select name="filter[secretaria]" id="secretaria" class="filtro-input"
                                    value="{{ request('filter.secretaria') }}">
                                    <option value="">Selecione</option>
                                    <option value="secretaria1" {{ request('filter.secretaria') == 'secretaria1' ? 'selected' : '' }}>Secretaria 1</option>
                                    <option value="secretaria2" {{ request('filter.secretaria') == 'secretaria2' ? 'selected' : '' }}>Secretaria 2</option>
                                    <option value="secretaria3" {{ request('filter.secretaria') == 'secretaria3' ? 'selected' : '' }}>Secretaria 3</option>
                                </select>
                            </div>

                             <div class="filtro-group">
                                <label for="natureza" class="filtro-label">Natureza:</label>
                                <select id="natureza" name="filter[natureza]" class="filtro-select"
                                    value="{{ request('filter.natureza') }}">
                                    <option value="">Selecione</option>
                                    <option value="sugestao" {{ request('filter.natureza') == 'sugestao' ? 'selected' : '' }}>Sugestão</option>
                                    <option value="elogio" {{ request('filter.natureza') == 'elogio' ? 'selected' : '' }}>
                                        Elogio</option>
                                    <option value="reclamacao" {{ request('filter.natureza') == 'reclamacao' ? 'selected' : '' }}>Reclamação</option>
                                </select>
                            </div>
                           
                        </div>
                        <button type="submit" class="btn-filtrar">Filtrar</button>
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
                        <th scope="col">Anônimo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Data de Criação</th>
                        <th scope="col">Data de Atualização</th>
                        <th scope="col">Secretaria</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($manifestacoes as $manifestacao)
                    <tr>
                        <th scope="row"><a
                                href="{{ route('relatorios.ouvidoria', $manifestacao->id) }}">{{ $loop->index + 1 }}</a></th>
                        <td>{{ $manifestacao->anonimo == 1 ? 'Sim' : 'Não' }}</td>
                        <td>{{ $manifestacao->anonimo ? 'ANÔNIMO' : $manifestacao->nome }}</td>
                        <td>{{ $manifestacao->created_at }}</td>
                        <td>{{ $manifestacao->updated_at }}</td>
                        <td>{{ $manifestacao->secretaria }}</td>
                            <td>                             
                               
                                <a href="{{ route('pdf', [$manifestacao->id]) }}">Gerar PDF</a>



                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div> 
 <a href="{{ route('imprimir', request()->query()) }}" class="btn btn-success" target="_blank">Gerar Relatório de todas as manifestações</a>
    @if(isset($manifestacoes) && $manifestacoes->count() > 0)
        <p>Você tem {{ $manifestacoes->count() }} manifestações enviadas.</p>
    @else
        <p>Nenhuma manifestação enviada.
            <a href="{{ route('ouvidoria.form') }}">Clique aqui</a> para enviar uma nova manifestação.
        </p>
    @endif
</body>

</html>