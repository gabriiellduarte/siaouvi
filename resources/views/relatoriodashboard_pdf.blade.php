<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 5px; text-align: left; }
        th { background-color: #f2f2f2; }
        @media print {
            .no-print { display: none; }
        }
</style>
</head>
<body>
  <div style="text-align: center; margin-bottom: 20px;">
  <h2>Relatório de Ouvidoria</h2>
  <h2 style="font-size: 22px; font-weight: bold;">
    Natureza das manifestações
  </h2>
</div>

    <br><br>

    <!-- Gráfico -->
    <div style="width: 100%; max-width: 900px; height: 450px; margin: auto;">
      <canvas id="naturezaChart"></canvas>
    </div>
  </div>
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

<button onclick="window.print()" class="no-print" style="margin-top:15px;">Imprimir</button>

</body>
</html>




