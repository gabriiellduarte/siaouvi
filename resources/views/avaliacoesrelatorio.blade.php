<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Avaliações</title>
</head>
<body>

        <nav class="navbar">
    <div class="logo">MinhaApp</div>
    <ul>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        
    </ul>
    <a href="{{ route('logout') }}" class="btn">Sair</a>
</nav>

    <div class="container">
    <h1>Pesquisa de Satisfação do Site</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Pergunta</th>
                <th>⭐ Muito Insatisfeito</th>
                <th>⭐ Insatisfeito</th>
                <th>⭐ Neutro</th>
                <th>⭐ Satisfeito</th>
                <th>⭐ Muito Satisfeito</th>
                <th>Total de Respostas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($relatorio as $linha)
                <tr>
                    <td>{{ $linha['pergunta'] }}</td>
                    <td>{{ $linha['muito_insatisfeito'] }}</td>
                    <td>{{ $linha['insatisfeito'] }}</td>
                    <td>{{ $linha['neutro'] }}</td>
                    <td>{{ $linha['satisfeito'] }}</td>
                    <td>{{ $linha['muito_satisfeito'] }}</td>
                    <td>{{ $linha['total'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</body>
</html>