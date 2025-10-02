<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  a {
    text-decoration: none;
    color: black;
  }
</style>

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
                    <a href="{{ route('relatorios.ouvidoria') }}" class="btn btn-outline-dark text-start">Listagem</a>
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
                    <a href="{{ route('relatorios.ouvidoria') }}" class="btn btn-outline-dark text-start">Listagem</a>
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
            <a href="{{ route('relatorio.index') }}" class="btn btn-outline-dark w-100 text-start">Listagem</a>
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

<div style="text-align: center; margin-bottom: 20px;">
  <h2 style="font-size: 22px; font-weight: bold;">
    Natureza das manifestações
  </h2>
</div>

<div style="border: 1px solid #ccc; padding: 20px; width: 70%; margin: 0 auto; border-radius: 3px;">
  <div class="container">
    </div>

    <br><br>

    <!-- Gráfico -->
    <div style="width: 100%; max-width: 900px; height: 450px; margin: auto;">
      <canvas id="naturezaChart"></canvas>
    </div>
  </div>
</div>

<div style="text-align: center; margin-top: 20px;">
  <button class="btn btn-light"><a href="{{ route('relatoriodashboard_pdf', request()->query()) }}" target="_blank">Gerar relatório</a></button>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const labels = @json($labels);
  const values = @json($values);
  const total = values.reduce((a, b) => a + b, 0);

  const colors = [
    '#01d7fdff', '#e90909ff', '#f1c40f', '#34d399', '#0b6623',
    '#3498db', '#9b59b6', '#16a085', '#f39c12', '#2c3e50'
  ]; 

  const ctx = document.getElementById('naturezaChart').getContext('2d');

  const maxVal = Math.max(...values, 1);
  const step = Math.ceil(maxVal / 5);

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Por natureza',
        data: values,
        backgroundColor: colors,
        borderRadius: 6,
        barPercentage: 0.6,
        categoryPercentage: 0.6
      }]
    },
    options: {
      maintainAspectRatio: false,
      responsive: true,
      aspectRatio: 2,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: step,
            color: '#222',
            font: { size: 12 }
          },
          grid: {
            color: '#ddd',
            drawBorder: false
          }
        },
        x: {
          ticks: {
            color: '#222',
            font: { size: 12 }
          },
          grid: { display: false }
        }
      },
      plugins: {
        legend: { display: false },
        title: {
          display: true,
          text: 'Por natureza',
          align: 'start',
          color: '#222',
          font: { size: 16, weight: 'bold' },
          padding: { bottom: 20 }
        },
        tooltip: {
          enabled: true,
          callbacks: {
            label: function(ctx) {
              const count = ctx.raw;
              const pct = total > 0 ? Math.round((count / total) * 100) : 0;
              return `Quantidade: ${count} (${pct}%)`;
            }
          }
        }
      }
    }
  });
</script>
