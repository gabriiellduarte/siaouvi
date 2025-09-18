<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../avaliacao.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="satisfacao-container">
    <h2>Qual o seu nível de satisfação com essa página?</h2>

    

    <form id="form-satisfacao" method="POST" action="{{ route('avaliacaoStore') }}" class="satisfacao-form">
        @csrf
        
        <div class="satisfacao-opcoes">
        <label class="satisfacao-opcao">
            <input type="radio" name="nota" value="2" required>
            <div class="emoji">😞</div>
            <span>Muito insatisfeito</span>
        </label>
        <label class="satisfacao-opcao">
            <input type="radio" name="nota" value="4" required>
            <div class="emoji">☹️</div>
            <span>Insatisfeito</span>
        </label>
        <label class="satisfacao-opcao">
            <input type="radio" name="nota" value="6" required>
            <div class="emoji">😐</div>
            <span>Neutro</span>
        </label>
        <label class="satisfacao-opcao">
            <input type="radio" name="nota" value="8" required>
            <div class="emoji">😊</div>
            <span>Satisfeito</span>
        </label>
        <label class="satisfacao-opcao">
            <input type="radio" name="nota" value="10" required>
            <div class="emoji">😁</div>
            <span>Muito satisfeito</span>
        </label>
    </div>
        <label for="name">Nome</label>
        <input type="text" id="name" name="nome" placeholder="Digite seu nome" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Digite aqui seu email" required>

        <label for="pagina">Página</label>
        <select name="pagina" id="pagina">
            <option value="publicacoes.php">publicacoes.php</option>
            <option value="campanha.php">campanha.php</option>
            <option value="cartaservicos.php">cartaservicos.php</option>
        </select>

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="4"></textarea>

        <div class="captcha">
            <div class="g-recaptcha" data-sitekey="SUA_SITE_KEY"></div>
        </div>

        <p class="satisfacao-texto">
            *Prezado(a), esta avaliação não será analisada como manifestação de Ouvidoria...
        </p>

        <div class="satisfacao-buttons">
            <button type="reset" class="btn-cancelar">Cancelar</button>
            <button type="submit" class="btn-enviar">Enviar</button>
        </div>
        {{-- <input type="hidden" name="pagina" value="avaliacao"> --}}
    </form>
</div>





</body>
</html>