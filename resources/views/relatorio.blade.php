<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  a {
    text-decoration: none;
    color: white;
  }
</style>

<title>Relatórios por natureza</title>

<nav class="navbar bg-light border-bottom">
  <div class="container-fluid">
    <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#sidebar" aria-controls="sidebar">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<div class="offcanvas offcanvas-start bg-white text-dark" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarLabel">Selecione um tipo de relatório:</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <div class="accordion accordion-flush" id="accordionSidebar">

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingListagem">
          <button class="accordion-button collapsed bg-white text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseListagem" aria-expanded="false" aria-controls="collapseListagem">
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
                  <button class="accordion-button collapsed bg-white text-dark ps-4" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseListagemSem" aria-expanded="false" aria-controls="collapseListagemSem">
                    📋 Listagem sem detalhamento
                  </button>
                </h2>
                <div id="collapseListagemSem" class="accordion-collapse collapse" aria-labelledby="headingListagemSem"
                  data-bs-parent="#accordionListagemSem">
                  <div class="accordion-body d-flex flex-column gap-2 ps-5">
                    <a href="" class="btn btn-outline-dark text-start">Listagem</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion accordion-flush" id="accordionListagemCom">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingListagemCom">
                  <button class="accordion-button collapsed bg-white text-dark ps-4" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseListagemCom" aria-expanded="false" aria-controls="collapseListagemCom">
                    📑 Listagem com detalhamento
                  </button>
                </h2>
                <div id="collapseListagemCom" class="accordion-collapse collapse" aria-labelledby="headingListagemCom"
                  data-bs-parent="#accordionListagemCom">
                  <div class="accordion-body d-flex flex-column gap-2 ps-5">
                    <a href="" class="btn btn-outline-dark text-start">Listagem</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingPrestacao">
          <button class="accordion-button collapsed bg-white text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsePrestacao" aria-expanded="false" aria-controls="collapsePrestacao">
            Relatórios de prestação de contas
          </button>
        </h2>
        <div id="collapsePrestacao" class="accordion-collapse collapse" aria-labelledby="headingPrestacao"
          data-bs-parent="#accordionSidebar">
          <div class="accordion-body d-flex flex-column gap-2">
            <a href="{{ route('relatorio.dashboard') }}" class="btn btn-outline-dark w-100 text-start">Gráfico</a>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingEstatisticas">
          <button class="accordion-button collapsed bg-white text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseEstatisticas" aria-expanded="false" aria-controls="collapseEstatisticas">
            Relatórios de estatísticas
          </button>
        </h2>
        <div id="collapseEstatisticas" class="accordion-collapse collapse" aria-labelledby="headingEstatisticas"
          data-bs-parent="#accordionSidebar">
          <div class="accordion-body d-flex flex-column gap-2">
            <a href="" class="btn btn-outline-dark w-100 text-start"></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

  <div class="container mt-4 text-center">
  <h3 class="text-dark">Relatórios de prestação de contas</h3>
  <p class="text-dark">Por natureza - listagem</p>

  <form action="{{ route('relatorio.index') }}" method="GET" class="p-3 border rounded bg-light">
    <div class="row g-3 align-items-end">

      <div class="col-md-3">
        <label for="inicio" class="form-label">Início:</label>
        <input type="date" id="inicio" name="filter[inicio]" class="form-control"
          value="{{ request('filter.inicio') }}">
      </div>

      <div class="col-md-3">
        <label for="fim" class="form-label">Fim:</label>
        <input type="date" id="fim" name="filter[fim]" class="form-control"
          value="{{ request('filter.fim') }}">
      </div>

      <div class="col-md-3">
        <label for="secretaria" class="form-label">Secretaria:</label>
        <select name="filter[secretaria]" id="secretaria" class="form-select">
          <option value="">Selecione</option>
          <option value="secretaria1" {{ request('filter.secretaria') == 'secretaria1' ? 'selected' : '' }}>Secretaria 1</option>
          <option value="secretaria2" {{ request('filter.secretaria') == 'secretaria2' ? 'selected' : '' }}>Secretaria 2</option>
          <option value="secretaria3" {{ request('filter.secretaria') == 'secretaria3' ? 'selected' : '' }}>Secretaria 3</option>
        </select>
      </div>

      <div class="col-md-3">
        <label for="natureza" class="form-label">Categoria:</label>
        <select id="natureza" name="filter[natureza]" class="form-select">
          <option value="">Selecione</option>
          <option value="sugestao" {{ request('filter.natureza') == 'sugestao' ? 'selected' : '' }}>Sugestão</option>
          <option value="elogio" {{ request('filter.natureza') == 'elogio' ? 'selected' : '' }}>Elogio</option>
          <option value="reclamacao" {{ request('filter.natureza') == 'reclamacao' ? 'selected' : '' }}>Reclamação</option>
        </select>
      </div>
    </div>

    <div class="mt-3 text-start">
      <button type="submit" class="btn btn-dark">
         Filtrar
      </button>
    </div>
  </form>

  <div class="mt-3">
    <a href="{{ route('relatorio_imprimir', request()->query()) }}" target="_blank" class="btn btn-dark">
      Gerar Relatório de todas as manifestações
    </a>
  </div>
</div>

<br>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Data/hora manifestação</th>
        <th>Nome</th>
        <th>Natureza</th>
        <th>Secretaria</th>
      </tr>
    </thead>
    <tbody>
      @forelse($manifestacoes as $manifestacao)
      <tr>
        <td>{{ $manifestacao->created_at }}</td>
        <td>{{ $manifestacao->anonimo ? 'ANÔNIMO' : $manifestacao->nome }}</td>
        <td>{{ $manifestacao->tipo_assunto }}</td>
        <td>{{ $manifestacao->secretaria }}</td>
      </tr>
      @empty
      <tr>
        <td colspan="4" class="text-center">Nenhuma manifestação registrada.</td>
      </tr>
      @endforelse
    </tbody>
  </table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
