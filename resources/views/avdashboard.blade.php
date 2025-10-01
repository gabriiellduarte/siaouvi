<style>
  a {
    text-decoration: none;
    color: #DF510D;;
  }
</style>

<div style="text-align: center; margin-bottom: 20px;">
        <h2 style="font-size: 22px; font-weight: bold;">
            Avaliação contínua dos serviços públicos
        </h2>
    </div>
<div style="border: 1px solid #ccc; padding: 20px; width: 70%; margin: 0 auto; border-radius: 3px;">
<div class="container">
  <div style="display: flex; align-items: center; justify-content: space-between; gap: 10px;">
    <h3 style="margin: 0;">Avaliação contínua dos serviços públicos</h3>
    <select name="ano" style="width: 25%; height: 25px;" class="form-control" id="ano">
      <option value="2025">2025</option>
      <option value="2024">2024</option>
      <option value="2023">2023</option>
    </select>
  </div>
  <br>
  <br>
  <!-- Gráfico no código abaixo -->
    <div style="width: 100%; max-width: 900px; height: 450px; margin: auto;">
        <canvas id="avaliacaoChart"></canvas>
    </div>

    <div style="text-align: center; margin-top: 20px;">
        <span style="margin: 1em;">Quantidade de processos</span>
        <br>
        <br>
        <a href="{{ route('avaliacoes.create') }}" 
           style="display: inline-block; background: #DF510D;; color: #fff; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; transition: background 0.3s;">
            Clique para avaliar
        </a>
        <br>
        <br>
        <span style="margin: 1em;">Quantidade de avaliações até o momento: {{ $quantidadeAvaliacoes }} - Data/hora da última avaliação: {{ $ultimaData ?? 'Nenhuma avaliação ainda' }}</span>
        <br>
        <br>
        <span style="margin: 1em;">Esclarecemos que os dados fornecidos acima serão tratados com respeito à sua privacidade.</span>
        <br>
        <span style="margin: 1em;">Seguindo a<strong> <a href="https://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/l13709.htm" rel="noopener noreferrer">LGPD - Lei Geral de Proteção de Dados 13.709</a></strong> de 14 de agosto de 2018.</span>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- classificacoes das avaliacoes -->
<script>
  const labels = [
    'Muito insatisfeito',
    'Insatisfeito',
    'Neutro',
    'Satisfeito',
    'Muito satisfeito'
  ];

// variavel do controller para puxar os dados do banco //
  const values = [
    {{ $muitoinsatisfeito }},
    {{ $insatisfeito }},
    {{ $neutro }},
    {{ $satisfeito }},
    {{ $muitosatisfeito }}
  ];

  const total = {{ $total ?? 0 }};

  const colors = [
    '#e74c3c',  
    '#e67e22',  
    '#f1c40f',  
    '#34d399',  
    '#0b6623'   
  ];

  const ctx = document.getElementById('avaliacaoChart').getContext('2d');

  const maxVal = Math.max(...values, 1);
  const step = Math.ceil(maxVal / 5);

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: 'Resultado da pesquisa',
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
          text: 'Resultado da pesquisa',
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
