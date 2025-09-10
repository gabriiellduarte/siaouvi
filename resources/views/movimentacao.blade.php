<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<h2>Informação da Movimentação</h2>
<title>Detalhamento de solicitação à Ouvidoria</title>
<form action="">
    @csrf
    <div class="form-group">
    <label class="form-label">Tipo de Movimentação:</label>
    <select name="tipo" required>
        <option value="ENCAMINHADA">Encaminhada para Ouvidoria Setorial</option>
        <option value="RESPONDIDA">Respondida</option>
        <option value="VISUALIZADA">Visualizada</option>
        <option value="EM_ANALISE">Em análise</option>
        <option value="REENCAMINHADA">Reencaminhada</option>
        <option value="INDEFERIDA">Indeferida</option>
        <option value="RESPONDIDA_OUVIDORIA">Respondida pela Ouvidoria Setorial</option>
        <option value="REABRIR">Reabrir</option>
        <option value="PRORROGADA">Prorrogada</option>

    </select> <br>
    </div>
    <div class="form-group"></div>
    <label class="form-label">Secretaria:</label>
    <select name="secretaria" id="secretaria">
    <option value="s1">Secretaria 1</option>
    <option value="s2">Secretaria 2</option>
    <option value="s3">Secretaria 3</option>
    </select><br>

    <label>Mensagem/Resposta:</label>
    <textarea name="mensagem"></textarea>

    <button type="submit">Salvar</button>
    </div>
    </form>
<a href="{{ route('dashboardouvi') }}">Voltar ao Dashboard</a>