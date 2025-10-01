<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: "Arial", sans-serif;
            font-size: 12px;
            color: #222;
            margin: 40px;
            background: #fff;
            line-height: 1.5;
        }
        header {
            text-align: center;
            margin-bottom: 25px;
        }
        header h1 {
            margin: 0;
            font-size: 20px;
            font-family: "Times New Roman", serif;
            font-weight: bold;
            text-transform: uppercase;
        }
        header p {
            margin: 3px 0;
            font-size: 11px;
            color: #555;
        }
        .titulo-relatorio {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin: 20px 0;
            text-transform: uppercase;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding: 8px 0;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 15px;
            margin-bottom: 20px;
            background: #fafafa;
        }
        .card h3 {
            font-size: 13px;
            margin: 0 0 12px 0;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        td, th {
            border: 1px solid #e0e0e0;
            padding: 8px 10px;
            text-align: left;
            vertical-align: top;
        }
        th {
            width: 20%;
            background: #f2f2f2;
            font-weight: bold;
            color: #000;
        }
        .mensagem, .acompanhamento {
            white-space: pre-line;
            font-size: 12px;
            color: #222;
        }
        .footer {
            text-align: center;
            font-size: 10px;
            margin-top: 40px;
            color: #666;
            border-top: 1px solid #ccc;
            padding-top: 6px;
        }
    </style>
</head>
<body>
    <header>
        {{-- Opcional: brasão da prefeitura --}}
        {{-- <img src="{{ public_path('brasao.png') }}" height="70" style="margin-bottom:10px;"> --}}
        <h1>Prefeitura Municipal de Aracati</h1>
        <p>{{ $manifestacao->cep ?? '---' }}</p>
        <p>Email: ouvidoriageral@aracati.ce.gov.br</p>
    </header>

    <div class="titulo-relatorio">
        Relatório de Manifestação <br>
        Protocolo: {{ $manifestacao->id }} - {{ strtoupper($manifestacao->nome) }}
    </div>

    <div class="card">
        <h3>Informações da Manifestação</h3>
        <table>
            <tr>
                <th>PROTOCOLO</th>
                <td>{{ $manifestacao->id }}</td>
                <th>NATUREZA</th>
                <td>{{ $manifestacao->natureza ?? '---' }}</td>
            </tr>
            <tr>
                <th>DATA/HORA</th>
                <td>{{ $manifestacao->created_at->format('d/m/Y H:i:s') }}</td>
                <th>ORIGEM</th>
                <td>{{ $manifestacao->origem ?? '---' }}</td>
            </tr>
            <tr>
                <th>SECRETARIA</th>
                <td>{{ $manifestacao->secretaria ?? '---' }}</td>
                <th>Tempo de envio</th>
                <td>{{$manifestacao->tempo_formatado }}</td>
            </tr>
            <tr>
                <th>DATA MOVIMENTAÇÃO</th>
                {{-- <td colspan="3">{{ $movimentacao->created_at->format('d/m/Y H:i:s') ?? '---' }}</td> --}}
            </tr>
        </table>
    </div>

    <div class="card">
        <h3>Mensagem da Manifestação</h3>
        <p class="mensagem">{{ $manifestacao->mensagem }}</p>
    </div>

    <div class="card">
        <h3>Acompanhamento</h3>
        <p class="acompanhamento">{{ $movimentacao->mensagem_resposta ?? 'Sem acompanhamento registrado.' }}</p>
    </div>

    <div class="footer">
        Relatório gerado automaticamente pelo Sistema de Ouvidoria em {{ now()->format('d/m/Y H:i') }}
    </div>
</body>
</html>
