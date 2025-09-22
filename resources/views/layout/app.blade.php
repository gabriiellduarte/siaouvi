<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema')</title>
    <link rel="stylesheet" href="../dashboard.css">
    <link rel="stylesheet" href="../styles.css">
</head>
<body class="">

<nav class="">
    <div class="">
            <h1 class="">Sistema de Ouvidoria</h1>
        <div class="">
            <!-- botão voltar -->
            <a href="{{ route('dashboard') }}" class="">
                ← Voltar para Dashboard
            </a>
        </div>
    </div>
</nav>

<div class="">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
