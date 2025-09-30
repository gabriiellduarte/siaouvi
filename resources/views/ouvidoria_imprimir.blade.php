<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
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

    <table>
        <thead>
            <tr>
                <th>Data/Hora</th>
                <th>Protocolo</th>
                <th>Nome</th>
                <th>Secretaria</th>
            </tr>
        </thead>
        <tbody>
            @foreach($manifestacoes as $m)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($m->created_at)->format('d/m/Y H:i') }}</td>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->anonimo ? 'ANÔNIMO' : $m->nome }}</td>
                    <td>{{ $m->secretaria }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top:30px;">
        ____________________________<br>
        Assinatura do Ouvidor
    </div>

    <button onclick="window.print()" class="no-print" style="margin-top:15px;">Imprimir</button>
</body>
</html>
