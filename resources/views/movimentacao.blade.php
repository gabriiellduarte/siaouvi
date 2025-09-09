<h2>Nova Movimentação</h2>

<form action="">
    @csrf

    <label>Tipo de Movimentação:</label>
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

    </select>

    <label>Secretaria:</label>
    <input type="text" name="secretaria">

    <label>Mensagem/Resposta:</label>
    <textarea name="mensagem"></textarea>

    <button type="submit">Salvar</button>
</form>
<a href="{{ route('dashboardouvi') }}">Voltar ao Dashboard</a>