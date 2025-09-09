<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Movimentacao;
use App\Models\Manifestacao;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller 
{
  public function create($manifestacaoId) 
  {
        $manifestacao = Manifestacao::findOrFail($manifestacaoId);
        return view('movimentacao.create', compact('manifestacao'));
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
            'mensagem' => $request->mensagem,
            'secretaria' => $request->secretaria,
        ]);

        return redirect()->route('manifestacoes.show', $manifestacaoId)
            ->with('success', 'Movimentação registrada com sucesso!');
    }
}






