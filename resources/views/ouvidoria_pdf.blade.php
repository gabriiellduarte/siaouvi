<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            color: #333;
            margin: 20px;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        header h2 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }
        .sub-header {
            font-size: 12px;
            color: #555;
        }
        .box {
            border: 1px solid #555;
            border-radius: 6px;
            margin-bottom: 15px;
            padding: 10px;
        }
        .box h3 {
            margin: 0 0 10px 0;
            font-size: 13px;
            background: #f2f2f2;
            padding: 5px;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        td, th {
            border: 1px solid #bbb;
            padding: 6px;
        }
        th {
            background: #e9e9e9;
            text-align: left;
        }
        .mensagem, .acompanhamento {
            white-space: pre-line;
        }
    </style>
</head>
<body>
    <header>
        <img src="{{ public_path('logo.png') }}" alt="Prefeitura" height="60">
        <h2>Prefeitura Municipal de Aracati</h2>
        <p class="sub-header">
            RUA SANTOS DUMONT, 1148 - CENTRO<br>
            ARACATI - CE - ouvidoriageral@aracati.ce.gov.br
        </p>
        <p><strong>RELATÓRIO DE MANIFESTAÇÃO</strong></p>
        <p>PROTOCOLO: {{ $manifestacoes->id }} - {{ strtoupper($manifestacoes->nome) }}</p>
    </header>

    <div class="box">
        <h3>Informações da manifestação</h3>
        <table>

            <tr>
                <th>PROTOCOLO</th>
                <td>{{ $manifestacoes->id }}</td>
                <th>NATUREZA</th>
                <td>{{ $manifestacoes->natureza ?? '---' }}</td>
            </tr>
            <tr>
                <th>DATA/HORA</th>
                <td>{{ $manifestacoes->created_at->format('d/m/Y H:i:s') }}</td>
                <th>ORIGEM</th>
                <td></td>
            </tr>
            <tr>
                <th>SECRETARIA</th>
                <td>{{ $manifestacoes->secretaria ?? '---' }}</td>
                <th>QUANT. DIAS</th>
                <td></td>
            </tr>
            <tr>
                <th>DATA MOVIMENTAÇÃO</th>
                <td colspan="3"></td>
            </tr>
        </table>
    </div>

    <div class="box">
        <h3>Mensagem da manifestação</h3>
        <p class="mensagem">{{ $manifestacoes->mensagem }}</p>
    </div>

    <div class="box">
        <h3>Acompanhamento da manifestação</h3>
        <p class="acompanhamento">{{ $manifestacoes->acompanhamento ?? 'Sem acompanhamento registrado.' }}</p>
    </div>
</body>
</html>
