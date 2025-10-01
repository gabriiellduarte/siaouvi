<html>
<head>   
    <title>Formulário de Ouvidoria</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <div class="main-container">
        <h2 class="info-title">ouvidoria - formulário</h2>
    <div class="form-container">
        <h1 class="form-title">Formulário de Ouvidoria</h1>
        <form for="ouvidoria" action="{{ route('ouvidoria.store') }}" method="POST" enctype="multipart/form-data" class="ouvidoria-form">
            @csrf
            <h2 class="info-title">Informações do usuário</h2>
            {{-- enviar de forma anonima --}}
            <div class="form-group">
                <label class="block mb-2">
        <input type="checkbox" id="anonimo" name="anonimo" value="1">
        Enviar como anônimo
    </label>
            </div>
            <div class="user-info " id="user-info">
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

            
                <label for="gender" class="form-label">Sexo:</label>
                <select id="gender" name="gender" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
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
            <div class="form-group">
                <label for="cep" class="form-label">CEP:</label>
                <select name="cep" id="cep" class="form-select" required>
                    <option value="">selecione...</option>
                    <option value="bairro1">Bairro 1</option>
                    <option value="bairro2">Bairro 2</option>
                    <option value="bairro3">Bairro 3</option>
                    <option value="outros">Outros</option>
    </select>

    <input type="text" id="outros-input" name="outros_texto" placeholder="Especifique o bairro" class="form-input" style="display:none; margin-top:10px;">
            </div>

        </div>

            
            <h2 class="info-title">Informações da manifestação</h2>
            <div class="form-group">
                <label for="secretaria" class="form-label">Secretaria de destino da manifestação</label>
                <select name="secretaria" id="secretaria" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="secretaria1">Secretaria 1</option>
                    <option value="secretaria2">Secretaria 2</option>
                    <option value="secretaria3">Secretaria 3</option>
                </select>
            </div>
            <div>
                <label for="origem">Origem</label>
                <select name="origem" id="origem" class="form-select" required>
                    <option value="">Selecione...</option>
                    <option value="internet">Internet</option>
                    <option value="telefone">Telefone</option>
                    <option value="presencial">Presencial</option>
                    <option value="gmail">Gmail</option>
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
   
    <script>
    const anonimoCheckbox = document.getElementById('anonimo');
    const userFields = document.getElementById('user-info');

    anonimoCheckbox.addEventListener('change', function() {
    if (this.checked) {
        userFields.style.display = 'none';
        // remover required dos campos ocultos
        userFields.querySelectorAll('input, select, textarea').forEach(el => {
            el.removeAttribute('required');
            el.value = ''; // limpa valores
        });
    } else {
        userFields.style.display = 'block';
        // recolocar required
        userFields.querySelectorAll('input, select, textarea').forEach(el => {
            if (el.dataset.required === 'true') {
                el.setAttribute('required', 'required');
            }
        });
    }
});
const select = document.getElementById('cep');
    const outrosInput = document.getElementById('outros-input');

    select.addEventListener('change', function () {
      if (this.value === 'outros') {
        outrosInput.style.display = 'block';
        outrosInput.required = true; // obriga preencher se escolher "Outros"
      } else {
        outrosInput.style.display = 'none';
        outrosInput.value = '';
        outrosInput.required = false;
      }
    });
</script>
    
</body>
</html>
