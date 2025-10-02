<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios - Ouvidoria</title>

    <!-- Bootstrap primeiro -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Seu CSS depois -->
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <nav class="navbar bg-light border-bottom">
        <div class="container-fluid">
            <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="sidebar">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start bg-white text-dark" tabindex="-1" id="sidebar"
        aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Selecione um tipo de relatório:</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="accordion accordion-flush" id="accordionSidebar">

                <!-- Relatórios de Listagem -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingListagem">
                        <button class="accordion-button collapsed bg-white text-dark" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseListagem" aria-expanded="false"
                            aria-controls="collapseListagem">
                            Relatórios de listagem
                        </button>
                    </h2>
                    <div id="collapseListagem" class="accordion-collapse collapse" aria-labelledby="headingListagem"
                        data-bs-parent="#accordionSidebar">
                        <div class="accordion-body p-0">

                            <!-- Submenu: Listagem sem detalhamento -->
                            <div class="accordion accordion-flush" id="accordionListagemSem">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingListagemSem">
                                        <button class="accordion-button collapsed bg-white text-dark ps-4"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseListagemSem" aria-expanded="false"
                                            aria-controls="collapseListagemSem">
                                            📋 Listagem sem detalhamento
                                        </button>
                                    </h2>
                                    <div id="collapseListagemSem" class="accordion-collapse collapse"
                                        aria-labelledby="headingListagemSem" data-bs-parent="#accordionListagemSem">
                                        <div class="accordion-body d-flex flex-column gap-2 ps-5">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submenu: Listagem com detalhamento -->
                            <div class="accordion accordion-flush" id="accordionListagemCom">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingListagemCom">
                                        <button class="accordion-button collapsed bg-white text-dark ps-4"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseListagemCom" aria-expanded="false"
                                            aria-controls="collapseListagemCom">
                                            📑 Listagem com detalhamento
                                        </button>
                                    </h2>
                                    <div id="collapseListagemCom" class="accordion-collapse collapse"
                                        aria-labelledby="headingListagemCom" data-bs-parent="#accordionListagemCom">
                                        <div class="accordion-body d-flex flex-column gap-2 ps-5">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Relatórios de Prestação de Contas -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingPrestacao">
                        <button class="accordion-button collapsed bg-white text-dark" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsePrestacao" aria-expanded="false"
                            aria-controls="collapsePrestacao">
                            Relatórios de prestação de contas
                        </button>
                    </h2>
                    <div id="collapsePrestacao" class="accordion-collapse collapse" aria-labelledby="headingPrestacao"
                        data-bs-parent="#accordionSidebar">
                        <div class="accordion-body d-flex flex-column gap-2">
                            <a href="{{ route('relatorio.index') }}"
                                class="btn btn-outline-dark w-100 text-start">Listagem</a>
                            <a href="{{ route('relatorio.dashboard') }}"
                                class="btn btn-outline-dark w-100 text-start">Gráfico</a>
                        </div>
                    </div>
                </div>

                <!-- Relatórios de Estatísticas -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEstatisticas">
                        <button class="accordion-button collapsed bg-white text-dark" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseEstatisticas" aria-expanded="false"
                            aria-controls="collapseEstatisticas">
                            Relatórios de estatísticas
                        </button>
                    </h2>
                    <div id="collapseEstatisticas" class="accordion-collapse collapse"
                        aria-labelledby="headingEstatisticas" data-bs-parent="#accordionSidebar">
                        <div class="accordion-body d-flex flex-column gap-2">
                            <a href="" class="btn btn-outline-dark w-100 text-start"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Conteúdo principal -->
    <div class="container my-4">
        <header class="filtro-header mb-4">
            <h2>Opções de filtragem</h2>
            <form action="{{ route('relatorios.ouvidoria') }}" method="GET"
                class="p-3 border rounded bg-light">
                <div class="row g-3">
                    <!-- Anônimo -->
                    <div class="col-md-2">
                        <label for="anonimo" class="filtro-label">Anônimo:</label>
                        <select id="anonimo" name="filter[anonimo]" class="form-select">
                            <option value="">Selecione</option>
                            <option value="1" {{ request('filter.anonimo') == 'sim' ? 'selected' : '' }}>Sim</option>
                            <option value="0" {{ request('filter.anonimo') == 'nao' ? 'selected' : '' }}>Não</option>
                        </select>
                    </div>

                    <!-- Início -->
                    <div class="col-md-2">
                        <label for="inicio" class="filtro-label">Início:</label>
                        <input type="date" id="inicio" name="filter[inicio]" class="form-control"
                            value="{{ request('filter.inicio') }}">
                    </div>

                    <!-- Fim -->
                    <div class="col-md-2">
                        <label for="fim" class="filtro-label">Fim:</label>
                        <input type="date" id="fim" name="filter[fim]" class="form-control"
                            value="{{ request('filter.fim') }}">
                    </div>

                    <!-- Secretaria -->
                    <div class="col-md-3">
                        <label for="secretaria" class="filtro-label">Secretaria:</label>
                        <select name="filter[secretaria]" id="secretaria" class="form-select">
                            <option value="">Selecione</option>
                            <option value="secretaria1"
                                {{ request('filter.secretaria') == 'secretaria1' ? 'selected' : '' }}>Secretaria 1</option>
                            <option value="secretaria2"
                                {{ request('filter.secretaria') == 'secretaria2' ? 'selected' : '' }}>Secretaria 2</option>
                            <option value="secretaria3"
                                {{ request('filter.secretaria') == 'secretaria3' ? 'selected' : '' }}>Secretaria 3</option>
                        </select>
                    </div>

                    <!-- Natureza -->
                    <div class="col-md-3">
                        <label for="natureza" class="filtro-label">Natureza:</label>
                        <select id="natureza" name="filter[natureza]" class="form-select">
                            <option value="">Selecione</option>
                            <option value="sugestao"
                                {{ request('filter.natureza') == 'sugestao' ? 'selected' : '' }}>Sugestão</option>
                            <option value="elogio"
                                {{ request('filter.natureza') == 'elogio' ? 'selected' : '' }}>Elogio</option>
                            <option value="reclamacao"
                                {{ request('filter.natureza') == 'reclamacao' ? 'selected' : '' }}>Reclamação</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-dark">Filtrar</button>
                </div>
            </form>
        </header>

        <div class="text-center mb-4">
            <h1>Manifestações enviadas</h1>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
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
                        <th scope="row">
                            <a href="{{ route('relatorios.ouvidoria', $manifestacao->id) }}">
                                {{ $loop->index + 1 }}
                            </a>
                        </th>
                        <td>{{ $manifestacao->anonimo == 1 ? 'Sim' : 'Não' }}</td>
                        <td>{{ $manifestacao->anonimo ? 'ANÔNIMO' : $manifestacao->nome }}</td>
                        <td>{{ $manifestacao->created_at }}</td>
                        <td>{{ $manifestacao->updated_at }}</td>
                        <td>{{ $manifestacao->secretaria }}</td>
                        <td>
                            <a href="{{ route('pdf', [$manifestacao->id]) }}" class="btn btn-sm btn-dark">
                                Gerar PDF
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-3">
            <a href="{{ route('imprimir', request()->query()) }}" class="btn btn-dark" target="_blank">
                Gerar Relatório de todas as manifestações
            </a>
        </div>

        <div class="mt-3">
            @if(isset($manifestacoes) && $manifestacoes->count() > 0)
            <p>Você tem {{ $manifestacoes->count() }} manifestações enviadas.</p>
            @else
            <p>Nenhuma manifestação enviada.
                <a href="{{ route('ouvidoria.form') }}">Clique aqui</a> para enviar uma nova manifestação.
            </p>
            @endif
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
