<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<nav class="navbar bg-light border-bottom">
  <div class="container-fluid">
    <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#sidebar" aria-controls="sidebar">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- Sidebar -->
<div class="offcanvas offcanvas-start bg-white text-dark" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="sidebarLabel">Selecione um tipo de relatório:</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <div class="accordion accordion-flush" id="accordionSidebar">

      <!-- Relatórios de Listagem -->
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

            <!-- Submenu: Listagem com detalhamento -->
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
  <button class="btn btn-dark">Atualizar informações para gerar relatório</button>
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
        <td>{{ $manifestacao->nome }}</td>
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
