<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação Contínua dos Serviços Públicos</title>
    <link rel="stylesheet" href="../avaliacaopergunta.css">
</head>
<body>
    <div class="avaliacao-container">
        <h1>Avaliação contínua dos serviços públicos</h1>
        <p class="avaliacao-descricao">
            Prezado cidadão, para melhor atender a sua demanda e aprimorar os serviços prestados por nossa gestão, gostaríamos que respondesse algumas perguntas para medir sua satisfação e, com isso, propor melhorias aos órgãos internos sobre os serviços avaliados.
        </p>
        <form method="POST" action="{{ route('avaliacaoStore') }}" class="avaliacao-form">
            @csrf
            <div class="form-group">
                <label for="cpf">Informe seu CPF</label>
                <input type="text" class="form-control" placeholder="Digite seu CPF" name="cpf" id="cpf">
                <small class="form-text">O CPF é necessário para limitar a votação mensal por pessoa. Os dados informados nesta pesquisa estarão seguros de acordo com a LGPD.</small>
            </div>
            @for($i = 1; $i <= 14; $i++)
            <div class="pergunta-box">
                <input type="hidden" name="pergunta{{ $i }}" value="{{ $i }}">
                <label class="pergunta-titulo" for="resposta{{ $i }}">
                    {{ [
                        1 => 'Como você avalia a atual Gestão Administrativa do nosso Município?',
                        2 => 'Como você avalia o atendimento da Ouvidoria Geral do nosso Município?',
                        3 => 'Qual seu nível de satisfação com a transparência no nosso município?',
                        4 => 'Como você avalia o serviço de coleta de lixo em seu bairro/município?',
                        5 => 'Como você avalia o serviço de conservação de limpeza das ruas em seu bairro/município?',
                        6 => 'Como você avalia a situação da conservação do patrimônio histórico do seu bairro/município?',
                        7 => 'Como você avalia o serviço de conservação de praças, jardins e canteiros em seu bairro/município?',
                        8 => 'Como você avalia o empenho da gestão no fortalecimento da cultura e tradições em seu Município?',
                        9 => 'Como você avalia o serviço de iluminação pública de seu bairro/município?',
                        10 => 'Como você avalia a questão de segurança pública em seu bairro/município?',
                        11 => 'Como você avalia o fortalecimento e investimento em práticas esportivas e lúdicas em seu bairro/município?',
                        12 => 'Como você avalia o atendimento e serviços da Saúde do nosso município?',
                        13 => 'Como você avalia o atendimento e serviços da Educação do nosso município?',
                        14 => 'Como você avalia o atendimento e serviços da Assistência Social do nosso município?',
                    ][$i] }}
                </label>
                <div class="nota-opcoes">
                    <label><input type="radio" name="resposta{{ $i }}" value="2" required> <span class="emoji">😞</span> Muito insatisfeito</label>
                    <label><input type="radio" name="resposta{{ $i }}" value="4"> <span class="emoji">☹️</span> Insatisfeito</label>
                    <label><input type="radio" name="resposta{{ $i }}" value="6"> <span class="emoji">😐</span> Neutro</label>
                    <label><input type="radio" name="resposta{{ $i }}" value="8"> <span class="emoji">😊</span> Satisfeito</label>
                    <label><input type="radio" name="resposta{{ $i }}" value="10"> <span class="emoji">😁</span> Muito satisfeito</label>
                </div>
            </div>
            @endfor
            <div class="form-group">
                <label for="o_mensagem">Deixe sua mensagem (opcional)</label>
                <textarea name="o_mensagem" id="o_mensagem" class="form-control" rows="2"></textarea>
            </div>
            <p class="avaliacao-privacidade">
                *Prezado(a), esta avaliação não será analisada como manifestação de Ouvidoria. Servirá apenas para revisarmos e refletirmos sobre as informações disponíveis nesta página.<br>
                Esclarecemos que os dados fornecidos acima serão tratados com respeito à sua privacidade.<br>
                Seguindo a <strong><a href="https://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/l13709.htm" target="_blank">LGPD - Lei Geral de Proteção de Dados 13.709</a></strong>, de 14 de agosto de 2018.
            </p>
            <div class="form-actions">
                <button type="submit" class="btn-enviar">Enviar Pesquisa</button>
            </div>
        </form>
    </div>
</body>
</html>