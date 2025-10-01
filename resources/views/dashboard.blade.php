<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../dashboard.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div>
        <header class="filtro-header">
            <div>
                <h2>opções de filtragem</h2>
                <form action="{{ route('dashboardouvi') }}" method="GET" class="p-3 border rounded bg-light">
                    <div>
                        <div class="row valign-wrapper">
                            <div>
                                <label for="anonimo" class="filtro-label">Anônimo:</label>
                                <select id="anonimo" name="filter[anonimo]" class="filtro-select">
                                    <option value="">Selecione</option>
                                    <option value="1" {{ request('filter.anonimo') == 'sim' ? 'selected' : '' }}>Sim
                                    </option>
                                    <option value="0" {{ request('filter.anonimo') == 'nao' ? 'selected' : '' }}>Não
                                    </option>
                                </select>
                            </div>
                            <!-- Início e Fim -->
                            <div class="filtro-group">
                                <label for="inicio" class="filtro-label">Início:</label>
                                <input type="date" id="inicio" name="filter[inicio]" class="filtro-input"
                                    autocomplete="off" value="{{ request('filter.inicio') }}">
                            </div>
                            <div class="filtro-group">
                                <label for="fim" class="filtro-label">Fim:</label>
                                <input type="date" id="fim" name="filter[fim]" class="filtro-input" autocomplete="off"
                                    value="{{ request('filter.fim') }}">
                            </div>

                            <!-- Protocolo -->
                            <div class="filtro-group">
                                <label for="protocolo" class="filtro-label">id:</label>
                                <input type="text" id="protocolo" name="filter[protocolo]" class="filtro-input"
                                    autocomplete="off" value="{{ request('filter.protocolo') }}">
                            </div>

                            <!-- Nome -->
                            <div class="col-md-3">
                                <label for="nome" class="filtro-label">Nome:</label>
                                <input type="text" id="nome" name="filter[nome]" class="filtro-input" autocomplete="off"
                                    value="{{ request('filter.nome') }}">
                            </div>

                            <!-- Mensagem -->
                            <div class="col-md-3">
                                <label for="mensagem" class="filtro-label">Mensagem:</label>
                                <input type="text" id="mensagem" name="filter[mensagem]" class="filtro-input"
                                    autocomplete="off" value="{{ request('filter.mensagem') }}">
                            </div>

                            <!-- Secretaria -->
                            <div class="col-md-3">
                                <label for="secretaria" class="filtro-label">Secretaria:</label>
                                <select name="filter[secretaria]" id="secretaria" class="filtro-input"
                                    value="{{ request('filter.secretaria') }}">
                                    <option value="">Selecione</option>
                                    <option value="secretaria1" {{ request('filter.secretaria') == 'secretaria1' ? 'selected' : '' }}>Secretaria 1</option>
                                    <option value="secretaria2" {{ request('filter.secretaria') == 'secretaria2' ? 'selected' : '' }}>Secretaria 2</option>
                                    <option value="secretaria3" {{ request('filter.secretaria') == 'secretaria3' ? 'selected' : '' }}>Secretaria 3</option>
                                </select>
                            </div>

                            <!-- Origem -->
                            <div class="filtro-group">
                                <label for="origem" class="filtro-label">Origem:</label>
                                <select id="origem" name="filter[origem]" class="filtro-select"
                                    value="{{ request('filter.origem') }}">
                                    <option value="">Selecione</option>
                                    <option value="interna" {{ request('filter.origem') == 'interna' ? 'selected' : '' }}>
                                        Interna</option>
                                    <option value="externa" {{ request('filter.origem') == 'externa' ? 'selected' : '' }}>
                                        Externa</option>
                                </select>
                            </div>

                            <!-- Natureza -->
                            <div class="filtro-group">
                                <label for="natureza" class="filtro-label">Natureza:</label>
                                <select id="natureza" name="filter[natureza]" class="filtro-select"
                                    value="{{ request('filter.natureza') }}">
                                    <option value="">Selecione</option>
                                    <option value="sugestao" {{ request('filter.natureza') == 'sugestao' ? 'selected' : '' }}>Sugestão</option>
                                    <option value="elogio" {{ request('filter.natureza') == 'elogio' ? 'selected' : '' }}>
                                        Elogio</option>
                                    <option value="reclamacao" {{ request('filter.natureza') == 'reclamacao' ? 'selected' : '' }}>Reclamação</option>
                                </select>
                            </div>

                            <!-- Situação -->
                            <div class="filtro-group">
                                <label for="situacao" class="filtro-label">Situação:</label>
                                <select id="situacao" name="filter[situacao]" class="filtro-select"
                                    value="{{ request('filter.situacao') }}">
                                    <option value="em_tramitacao" {{ request('filter.situacao') == 'em_tramitacao' ? 'selected' : '' }}>EM TRAMITAÇÃO</option>
                                    <option value="concluido" {{ request('filter.situacao') == 'concluido' ? 'selected' : '' }}>Concluído</option>
                                    <option value="pendente" {{ request('filter.situacao') == 'pendente' ? 'selected' : '' }}>Pendente</option>
                                </select>
                            </div>

                            <!-- Anexo -->
                            <div class="filtro-group">
                                <label for="anexos" class="filtro-label">Anexo?</label>
                                <select id="anexos" name="filter[anexos]" class="filtro-select"
                                    value="{{ request('filter.anexos') }}">
                                    <option value="">Selecione</option>
                                    <option value="sim" {{ request('filter.anexos') == 'sim' ? 'selected' : '' }}>Sim
                                    </option>
                                    <option value="nao" {{ request('filter.anexos') == 'nao' ? 'selected' : '' }}>Não
                                    </option>
                                </select>
                            </div>

                            <!-- Movimentação -->
                            <div class="filtro-group">
                                <label for="movimentacao" class="filtro-label">Movimentação:</label>
                                <select id="movimentacao" name="filter[movimentacao]" class="filtro-select"
                                    value="{{ request('filter.movimentacao') }}">
                                    <option value="">Selecione</option>
                                    <option value="entrada" {{ request('filter.movimentacao') == 'entrada' ? 'selected' : '' }}>Entrada</option>
                                    <option value="saida" {{ request('filter.movimentacao') == 'saida' ? 'selected' : '' }}>Saída</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn-filtrar">Filtrar</button>
                        <!-- Mais filtros -->
                        <div class="mt-3">
                            <button type="button" class="btn btn-secondary">
                                <i class="bi bi-funnel-fill"></i> Mais filtros
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </header>
    </div>
    <div class="col-md-10- offset-md-1 dashboard-title-container">
        <div class="col-md-10- offset-md-1 dashboard-title-container">
            <h1>Manifestações enviadas</h1>
        </div>
        <div class="col-md-10- offset-md-1 dashboard-table-container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Anônimo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Data de Criação</th>
                        <th scope="col">Data de Atualização</th>
                        <th scope="col">Secretaria</th>
                        <th scope="col">Natureza</th>
                        <th scope="col">Anexo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($manifestacoes as $manifestacao)
                    <tr>
                        <th scope="row"><a
                                href="{{ route('dashboardouvi', $manifestacao->id) }}">{{ $loop->index + 1 }}</a></th>
                        <td>{{ $manifestacao->anonimo == 1 ? 'Sim' : 'Não' }}</td>

                        <td>{{ $manifestacao->anonimo ? 'ANÔNIMO' : $manifestacao->nome }}</td>
                        <td>{{ $manifestacao->anonimo ? '-------' : $manifestacao->email }}</td>
                        <td>{{ $manifestacao->cpf }}</td>
                        <td>{{ $manifestacao->created_at }}</td>
                        <td>{{ $manifestacao->updated_at }}</td>
                        <td>{{ $manifestacao->secretaria }}</td>
                        <td>{{ $manifestacao->natureza }}</td>
                        <td>{{ count($manifestacao->anexos ?? []) > 0 ? 'Sim' : 'Não' }}</td>

                            <td>
                                @can('editar manifestação')
                                <button><a href="{{ route('ouvidoria.edicao', $manifestacao->id) }}">Editar</a></button>
                                @endcan
                                <form action="{{ route('ouvidoria.destroy', $manifestacao->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                @can('deletar manifestação')
                                    <button type="submit">Excluir</button>
                                @endcan
                                </form>
                                {{-- @can('visualizar manifestação') --}}
                                <button><a
                                        href="{{ route('movimentacao.show', $manifestacao->id) }}">Andamento</a></button>
                                        
                                {{-- @endcan --}}
                                <!-- ...existing code... -->
                                <!-- Botão para abrir o modal -->
                                <button type="button" onclick="abrirModal({{ $manifestacao->id }})"
                                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                                    Visualizar anexos
                                </button>
                                <button><a href="{{ route('relatorios.ouvidoria', $manifestacao->id) }}">ver relatorio</a></button>

                                <!-- Modal exclusivo para cada manifestação -->
                                <div id="modalAnexos{{ $manifestacao->id }}" class="modal" style="display: none;">
                                    <div class="modal-content">
                                        <!-- Cabeçalho -->
                                        <div class="modal-header">
                                            <h2>Visualização de Anexos</h2>
                                            <button class="close-btn"
                                                onclick="fecharModal({{ $manifestacao->id }})">&times;</button>
                                        </div>

                                        <!-- Tabela de anexos -->
                                        <div class="modal-body">
                                            <table class="w-full border-collapse border text-sm">
                                                <thead>
                                                    <tr class="bg-gray-200">
                                                        <th class="border p-2 text-left">Nome</th>
                                                        <th class="border p-2 text-center">Extensão</th>
                                                        <th class="border p-2 text-center">Visualizar</th>
                                                        <th class="border p-2 text-center">Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($manifestacao->anexos as $anexo)
                                                        @php
                                                            $ext = pathinfo($anexo->caminho_arquivo, PATHINFO_EXTENSION);
                                                            $nome = pathinfo($anexo->caminho_arquivo, PATHINFO_FILENAME);
                                                            $url = asset('storage/' . $anexo->caminho_arquivo);
                                                        @endphp
                                                        <tr>
                                                            <td class="border p-2">
                                                                @if(in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <a href="#"
                                                                        onclick="mostrarImagem('{{ $url }}', '{{ $manifestacao->id }}'); return false;"
                                                                        style="color:#1976d2;">{{ $nome }}</a>
                                                                @else
                                                                    <a href="{{ $url }}" target="_blank"
                                                                        style="color:#1976d2;">{{ $nome }}</a>
                                                                @endif
                                                            </td>
                                                            <td class="border p-2 text-center">{{ $ext }}</td>
                                                            <td class="border p-2 text-center">
                                                                @if(in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                                                    <span
                                                                        id="imgPreview{{ $manifestacao->id }}{{ $loop->index }}"></span>
                                                                @else
                                                                    <a href="{{ $url }}" target="_blank"
                                                                        class="px-3 py-1 bg-blue-500 text-white rounded">Abrir</a>
                                                                @endif
                                                            </td>
                                                            <td class="border p-2 text-center">
                                                                <a href="{{ $url }}" download
                                                                    class="px-3 py-1 bg-green-600 text-white rounded">Baixar</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                            <!-- Área para visualizar imagem -->
                                            <div id="imagemModal{{ $manifestacao->id }}"
                                                style="display:none; text-align:center; margin-top:20px;">
                                                <img id="imagemExibida{{ $manifestacao->id }}" src="" alt="Visualização"
                                                    style="max-width:90%; max-height:60vh; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.2);">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- CSS do modal -->
                                <style>
                                    .modal {
                                        position: fixed;
                                        top: 0;
                                        left: 0;
                                        width: 100%;
                                        height: 100%;
                                        background: rgba(0, 0, 0, 0.7);
                                        display: none;
                                        /* Inicialmente fechado */
                                        justify-content: center;
                                        align-items: center;
                                        z-index: 50;
                                        padding: 1rem;
                                    }

                                    .modal-content {
                                        background: white;
                                        width: 95%;
                                        max-width: 900px;
                                        max-height: 90vh;
                                        overflow-y: auto;
                                        border-radius: 8px;
                                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
                                        display: flex;
                                        flex-direction: column;
                                        padding: 1rem;
                                    }

                                    .modal-header {
                                        display: flex;
                                        justify-content: space-between;
                                        align-items: center;
                                        border-bottom: 1px solid #ccc;
                                        padding-bottom: 0.5rem;
                                    }

                                    .close-btn {
                                        font-size: 1.5rem;
                                        font-weight: bold;
                                        color: red;
                                        border: none;
                                        background: none;
                                        cursor: pointer;
                                    }

                                    .modal-body {
                                        margin-top: 1rem;
                                        overflow-x: auto;
                                    }
                                </style>



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

    <!-- JS -->
    <script>
        function abrirModal(id) {
            document.getElementById('modalAnexos' + id).style.display = 'flex';
            fecharImagem(id);
        }
        function fecharModal(id) {
            document.getElementById('modalAnexos' + id).style.display = 'none';
            fecharImagem(id);
        }
        function mostrarImagem(url, id) {
            document.getElementById('imagemExibida' + id).src = url;
            document.getElementById('imagemModal' + id).style.display = 'block';
        }
        function fecharImagem(id) {
            document.getElementById('imagemModal' + id).style.display = 'none';
            document.getElementById('imagemExibida' + id).src = '';
        }
    </script>

</body>

</html>