    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <h3>Detalhes da Manifestação</h3>
       
          
       
    <button class="btn btn-primary"
    data-bs-toggle="modal"
    data-bs-target="#modalMovimentar"
    data-id="{{ $manifestacao->id }}"
    data-nome="{{ $manifestacao->nome }}"
    data-created="{{ $manifestacao->created_at->format('d/m/Y H:i') }}"
    data-tipo="{{ $manifestacao->tipo_assunto }}"
    data-mensagem="{{ $manifestacao->mensagem }}"
    data-movimentacoes='@json($manifestacao->movimentacoes)'>
    Nova Ação
    </button>

    <hr>

    <h4>Histórico de Movimentações</h4>
<table class="table">
    <thead>
        <tr>
            <th>Data/Hora</th>
            <th>Ação</th>
            <th>Secretaria</th>
            <th>Mensagem enviada</th>
        </tr>
    </thead>
    <tbody>
        @forelse($manifestacao->movimentacoes as $mov)
            <tr>
                <td>{{ $mov->created_at->format('d/m/Y H:i') }}</td>
                <td>{{ $mov->acao }}</td>
                <td>{{ $mov->secretaria ?? '-' }}</td>
                <td>{{ $mov->mensagem_resposta ?? '-' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhuma movimentação registrada.</td>
            </tr>
        @endforelse
    </tbody>
</table>

        <div class="modal fade" id="modalMovimentar" tabindex="-1" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="POST" action="{{ route('manifestacoes.movimentar.store', $manifestacao->id) }}" id="formMovimentacao">
        @csrf
        <div class="modal-header d-flex justify-content-center w-100">
          <h5 class="modal-title" id="modalHeader"></h5>
          <button type="button" class="btn-close position-absolute end-0 me-2" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
      
          <div class="mb-3">
            <label for="acao">Ação</label>
            <select name="acao" id="acao" class="form-select" required>
                <option value="">Selecione...</option>
                <option value="ENCAMINHADA">Encaminhada para Ouvidoria Setorial</option>
                <option value="RESPONDIDA">Respondida</option>
                <option value="VISUALIZADO">Visualizado</option>
                <option value="EM_ANALISE">Em Análise</option>
                <option value="REENCAMINHADO">Reencaminhado</option>
                <option value="INDEFERIDO">Indeferido</option>
                <option value="RESPONDIDA_SETORIAL">Respondida pela Ouvidoria Setorial</option>
                <option value="REABRIR">Reabrir</option>
                <option value="PRORROGADO">Prorrogado</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="secretaria">Secretaria</label>
            <select name="secretaria" id="secretaria" class="form-select">
                <option value="">Selecione...</option>
                <option value="s1">Secretaria 1</option>
                <option value="s2">Secretaria 2</option>
                <option value="s3">Secretaria 3</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="mensagem">Texto mensagem </label>
            <textarea name="mensagem" id="mensagem" rows="4" class="form-control"></textarea>
            <br>
            <label for="mensagem_resposta">Texto mensagem - resposta </label>
            <textarea name="mensagem_resposta" id="mensagem_resposta" rows="4" class="form-control"></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Salvar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Script de JS para o Modal -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

<script>
    var modalMovimentar = document.getElementById('modalMovimentar');
    modalMovimentar.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget;
    var id = button.getAttribute('data-id');
    var created = button.getAttribute('data-created');
    var tipo = button.getAttribute('data-tipo');
    var nome = button.getAttribute('data-nome');
    var mensagem = button.getAttribute('data-mensagem');
    var movimentacoes = JSON.parse(button.getAttribute('data-movimentacoes'));

        document.getElementById('modalHeader').textContent = `${nome} - ${tipo} - ${created}`;
        document.getElementById('mensagem').value = mensagem ?? '';
        
        document.getElementById('formMovimentacao').action = "/manifestacoes/" + id + "/movimentar";
    });
</script>
<!-- Script para aparecer o campo secretaria só quando escolher a opção reencaminhado -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const acaoSelect = document.getElementById('acao');
        const secretariaSelect = document.getElementById('secretaria');
        acaoSelect.addEventListener('change', function () {
            if (acaoSelect.value === 'REENCAMINHADO') {
                secretariaSelect.parentElement.style.display = 'block'; 
            } else {
                secretariaSelect.parentElement.style.display = 'none';
            }
            })

    })
</script>

<a href="{{ route('dashboardouvi') }}">Voltar ao Dashboard</a>
