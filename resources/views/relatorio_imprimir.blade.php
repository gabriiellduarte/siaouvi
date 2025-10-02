<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Relatório de Ouvidoria</title>
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
  <h2>Relatório de Ouvidoria</h2>
  <p>Período:</p>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Data/Hora</th>
        <th>Protocolo</th>
        <th>Nome</th>
        <th>Natureza</th>
        <th>Secretaria</th>
      </tr>
    </thead>
    <tbody>
      @forelse($manifestacoes as $manifestacao)
      <tr>
        <td>{{ $manifestacao->created_at }}</td>
        <td>{{ $manifestacao->id }}</td>
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
  
        <br>

      <div style="margin-top:30px;">
        _______________________________<br>
        Assinatura do Ouvidor
    </div>

    <button onclick="window.print()" class="no-print" style="margin-top:15px;">Imprimir</button>

</body>
</html>
  


