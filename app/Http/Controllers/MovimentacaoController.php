<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Movimentacao;
use App\Models\Manifestacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class MovimentacaoController extends Controller 
{
    
  public function create($manifestacaoId) 
  {
        $manifestacao = Manifestacao::findOrFail($manifestacaoId);
        return view('movimentacao', compact('manifestacao'));
  }

 public function store(Request $request, $manifestacaoId)
    {
        $request->validate([
            'tipo' => 'required',
            'mensagem' => 'nullable|string',
        ]);

        Movimentacao::create([
            'manifestacao_id' => $manifestacaoId,
            'tipo' => $request->tipo,
            'acao' => $request->acao,
            'mensagem' => $request->mensagem,
            'secretaria' => $request->secretaria,
        ]);

        return redirect()->route('movimentacao.show', $manifestacaoId)
            ->with('success', 'Movimentação registrada com sucesso!');
    }

    //Armazenar uma alteração e atualizar seu status
    public function storeMovimentacao(Request $request, $id)
{
        Movimentacao::create ([
        'manifestacao_id' => $id,
        'acao' => $request->acao,
        'mensagem' => $request->mensagem,
        'tipo_assunto' => $request->tipo_assunto,
        'mensagem_resposta' => $request->mensagem_resposta,
        'secretaria' => $request->secretaria,
    ]);
 

    return redirect()->route('movimentacao.show', $id)->with('success', 'Movimentação atualizada com sucesso!');
}

    // Mostrar as movimentações da manifestação que escolhi 
    public function showMovimentacao($id)
    {
        $manifestacao = Manifestacao::with( 'movimentacoes')->findOrFail($id);
        return view('movimentacao', compact('manifestacao'));
    }

    public function index()
    {
        $manifestacoes = Manifestacao::all();
            return view('/relatorio', compact('manifestacoes'));
    }

    public function dashboard()
    {
        // Buscar e agrupar pela natureza da manifestação
        $dados = DB::table('manifestacoes')
        ->select('natureza', DB::raw('COUNT(*) as total'))
        ->groupBy('natureza')
        ->get();

        // Preparar a array para o gráfico 
        $labels = $dados->pluck('natureza')->toArray();
        $values = $dados->pluck('total')->toArray();
            return view('relatoriodashboard', ['labels' => $labels, 'values' => $values]);
    }


}






