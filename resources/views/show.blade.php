<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Formulário de Ouvidoria</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="main-container">
        <h2 class="info-title">ouvidoria - formulário</h2>
    <div class="form-container">
        <h1 class="form-title">Formulário de Ouvidoria</h1>
        <form action="{{ route('ouvidoria.store') }}" method="POST" enctype="multipart/form-data" class="ouvidoria-form">
            @csrf
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-input" required value="{{ $manifestacao->nome }}">
            </div>

            <div class="form-group">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-input" required value="{{ $manifestacao->cpf }}">
            </div>

            <div class="form-group">
                <label for="date" class="form-label">Data de nascimento:</label>
                <input type="date" id="date" name="date" class="form-input" required value="{{ $manifestacao->data_nascimento }}">
            </div>

            <div class="form-group">
                <label for="gender" class="form-label">Sexo:</label>
                <select id="gender" name="gender" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="masculino" {{ $manifestacao->sexo == 'masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="feminino" {{ $manifestacao->sexo == 'feminino' ? 'selected' : '' }}>Feminino</option>
                    <option value="outro" {{ $manifestacao->sexo == 'outro' ? 'selected' : '' }}>Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="grau_instrucao" class="form-label">Grau de instrução:</label>
                <select name="grau_instrucao" id="grau_instrucao" class="form-select">
                    <option value="">Selecione...</option>
                    <option value="Analfabeto" {{ $manifestacao->grau_instrucao == 'Analfabeto' ? 'selected' : '' }}>Analfabeto</option>
                    <option value="fundamental" {{ $manifestacao->grau_instrucao == 'fundamental' ? 'selected' : '' }}>Fundamental</option>
                    <option value="medio" {{ $manifestacao->grau_instrucao == 'medio' ? 'selected' : '' }}>Médio</option>
                    <option value="superior" {{ $manifestacao->grau_instrucao == 'superior' ? 'selected' : '' }}>Superior</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" id="email" name="email" class="form-input" required value="{{ $manifestacao->email }}">
            </div>

            <div class="form-group">
                <label for="tipo_telefone" class="form-label">Tipo de telefone:</label>
                <select name="tipo_telefone" id="tipo_telefone" class="form-select">
                    <option value="">Selecione...</option>
                    <option value="whatsapp" {{ $manifestacao->tipo_telefone == 'whatsapp' ? 'selected' : '' }}>Whatsapp</option>
                    <option value="celular" {{ $manifestacao->tipo_telefone == 'celular' ? 'selected' : '' }}>Celular</option>
                    <option value="fixo" {{ $manifestacao->tipo_telefone == 'fixo' ? 'selected' : '' }}>Fixo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="contato" class="form-label">Contato:</label>
                <input type="tel" id="contato" name="contato" class="form-input" required value="{{ $manifestacao->telefone }}">
            </div>
            <h2 class="info-title">Informações da manifestação</h2>
            <div class="form-group">
                <label for="secretaria" class="form-label">Secretaria de destino da manifestação</label>
                <select name="secretaria" id="secretaria" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="secretaria1" {{ $manifestacao->secretaria_id == 'secretaria1' ? 'selected' : '' }}>Secretaria 1</option>
                    <option value="secretaria2" {{ $manifestacao->secretaria_id == 'secretaria2' ? 'selected' : '' }}>Secretaria 2</option>
                    <option value="secretaria3" {{ $manifestacao->secretaria_id == 'secretaria3' ? 'selected' : '' }}>Secretaria 3</option>
                </select>
            </div>
            <div>
                <label for="tipo_assunto" class="form-label">Tipo de assunto</label>
                <select name="tipo_assunto" id="tipo_assunto" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="reclamacao" {{ $manifestacao->tipo_assunto == 'reclamacao' ? 'selected' : '' }}>Reclamação</option>
                    <option value="sugestao" {{ $manifestacao->tipo_assunto == 'sugestao' ? 'selected' : '' }}>Sugestão</option>
                    <option value="elogio" {{ $manifestacao->tipo_assunto == 'elogio' ? 'selected' : '' }}>Elogio</option>
                </select>
            </div class="form-group">
                        <label for="forma_contato" class="form-label">Forma de contato</label>
            <select name="forma_contato" id="forma_contato" class="form-select" required>
                <option value="">Selecione...</option>
                <option value="email" {{ $manifestacao->forma_contato == 'email' ? 'selected' : '' }}>E-mail</option>
                <option value="telefone" {{ $manifestacao->forma_contato == 'telefone' ? 'selected' : '' }}>Telefone</option>
                <option value="presencial" {{ $manifestacao->forma_contato == 'presencial' ? 'selected' : '' }}>Presencial</option>
                <option value="protocolo" {{ $manifestacao->forma_contato == 'protocolo' ? 'selected' : '' }}>Protocolo</option>
            </select>
            <div class="form-group">
                <label for="Natureza" class="form-label">Natureza da manifestação</label>
                <select name="natureza" id="natureza" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="reclamacao" {{ $manifestacao->natureza == 'reclamacao' ? 'selected' : '' }}>Reclamação</option>
                    <option value="sugestao" {{ $manifestacao->natureza == 'sugestao' ? 'selected' : '' }}>Sugestão</option>
                    <option value="elogio" {{ $manifestacao->natureza == 'elogio' ? 'selected' : '' }}>Elogio</option>
                </select>
            </div>
            <div class="form-group">
                    <label for="observacoes" class="form-label">Mensagem</label>
                    <textarea name="observacoes" id="observacoes" class="form-input" rows="4">{{ $manifestacao->observacoes }}</textarea>
                </div>
                <div class="form-group">
                    <label for="anexos" class="form-label">Anexos</label>
                    <input type="file" name="anexos[]" id="anexos" class="form-input" multiple>
                </div>

            <button type="submit" class="submit-btn">Enviar manifestação</button>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>
</html>
