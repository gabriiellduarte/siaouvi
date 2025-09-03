<html>
<head>
   

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

            <div class="form-group">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="date" class="form-label">Data de nascimento:</label>
                <input type="date" id="date" name="date" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="gender" class="form-label">Sexo:</label>
                <select id="gender" name="gender" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="grau_instrucao" class="form-label">Grau de instrução:</label>
                <select name="grau_instrucao" id="grau_instrucao" class="form-select">
                    <option value="">Selecione...</option>
                    <option value="Analfabeto">Analfabeto</option>
                    <option value="fundamental">Fundamental</option>
                    <option value="medio">Médio</option>
                    <option value="superior">Superior</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="tipo_telefone" class="form-label">Tipo de telefone:</label>
                <select name="tipo_telefone" id="tipo_telefone" class="form-select">
                    <option value="">Selecione...</option>
                    <option value="whatsapp">Whatsapp</option>
                    <option value="celular">Celular</option>
                    <option value="fixo">Fixo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="contato" class="form-label">Contato:</label>
                <input type="tel" id="contato" name="contato" class="form-input" required>
            </div>
            <h2 class="info-title">Informações da manifestação</h2>
            <div class="form-group">
                <label for="secretaria_id" class="form-label">Secretaria de destino da manifestação</label>
                <select name="secretaria_id" id="secretaria_id" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="secretaria1">Secretaria 1</option>
                    <option value="secretaria2">Secretaria 2</option>
                    <option value="secretaria3">Secretaria 3</option>
                </select>
            </div>
            <div>
                <label for="tipo_assunto" class="form-label">Tipo de assunto</label>
                <select name="tipo_assunto" id="tipo_assunto" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="reclamacao">Reclamação</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="elogio">Elogio</option>
                </select>
            </div>
                        <label for="forma_contato" class="form-label">Forma de contato</label>
            <select name="forma_contato" id="forma_contato" class="form-select" required>
                <option value="">Selecione...</option>
                <option value="email">E-mail</option>
                <option value="telefone">Telefone</option>
                <option value="presencial">Presencial</option>
                <option value="protocolo">Protocolo</option>
            </select>
            <div class="form-group">
                <label for="Natureza" class="form-label">Natureza da manifestação</label>
                <select name="natureza" id="natureza" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="reclamacao">Reclamação</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="elogio">Elogio</option>
                </select>
            </div>
            <div class="form-group">
                    <label for="observacoes" class="form-label">Mensagem</label>
                    <textarea name="observacoes" id="observacoes" class="form-input" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="anexos" class="form-label">Anexos</label>
                    <input type="file" name="anexos[]" id="anexos" class="form-input" multiple>
                </div>

            <button type="submit" class="submit-btn">Enviar manifestação</button>
        </form>
    </div>
    </div>
   
    
</body>
</html>
