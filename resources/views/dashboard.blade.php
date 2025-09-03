<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <form action={{ route('ouvidoria.form') }}>
        <button>Log out</button>
    </form>
    <div class="col-md-10- offset-md-1 dashboard-title-container">
        <div class="col-md-10- offset-md-1 dashboard-title-container">
            <h1>Manifestações enviadas</h1>
        </div>
        <div class="col-md-10- offset-md-1 dashboard-table-container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($manifestacoes as $manifestacao)
                        <tr>
                            <th scope="row"><a href="{{ route('ouvidoria.show', $manifestacao->id) }}">{{ $loop->index + 1 }}</a></th>

                            <td>{{ $manifestacao->nome }}</td>
                            <td>{{ $manifestacao->cpf }}</td>
                            <td>{{ $manifestacao->data_nascimento }}</td>
                            <td>{{ $manifestacao->sexo }}</td>
                            <td>
                                <button><a href="{{ route('ouvidoria.edicao', $manifestacao->id) }}">Editar</a></button>
                                <form action="{{ route('ouvidoria.destroy', $manifestacao->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @if(isset($manifestacoes) && $manifestacoes->count() > 0)
        <p>Você tem {{ $manifestacoes->count() }} manifestações enviadas.</p>
    @else
        <p>Nenhuma manifestação enviada.
            <a href="{{ route('ouvidoria.form') }}">Clique aqui</a> para enviar uma nova manifestação.
        </p>
    @endif
    
</body>

</html>