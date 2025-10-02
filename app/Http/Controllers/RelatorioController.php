<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;
use App\Models\Manifestacao;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Movimentacao;
use Carbon\Carbon;

class Relatoriocontroller extends Controller
{
    //
    public function index(Request $request)
    {
                $query = Manifestacao::query();

        // Aplicando filtros
        if ($request->filled('filter.anonimo')) {
            $query->where('anonimo', $request->input('filter.anonimo'));
        }
        if ($request->filled('filter.inicio')) {
            $query->whereDate('created_at', '>=', $request->input('filter.inicio'));
        }

        if ($request->filled('filter.fim')) {
            $query->whereDate('updated_at', '<=', $request->input('filter.fim'));
        }

        // if ($request->filled('filter.protocolo')) {
        //     $query->where('id', 'like', "%" . $request->input('filter.protocolo') . "%");
        // }

        if ($request->filled('filter.nome')) {
            $query->where('nome', 'like', "%" . $request->input('filter.nome') . "%");
        }

        if ($request->filled('filter.secretaria')) {
            $query->where('secretaria', 'like', "%" . $request->input('filter.secretaria') . "%");
        }

        if ($request->filled('filter.natureza')) {
            $query->where('natureza', $request->input('filter.natureza'));
        }

 $manifestacoes = Manifestacao::all();
        $manifestacoes = $query->get();

        return view('relatoriosouvidoria', compact('manifestacoes'));
    }

    public function imprimir(Request $request)
{
    $manifestacoes = Manifestacao::all();
    return view('ouvidoria_imprimir', compact('manifestacoes'));
}



public function pdf($id)
{

    
    $manifestacao = Manifestacao::findOrFail($id);
    $created = \Carbon\Carbon::parse($manifestacao->created_at);
    $manifestacao->tempo_formatado = $created->diffForHumans(null, true); 
// dd($movimentacoes);
    $movimentacao = Movimentacao::where('manifestacao_id', $manifestacao->id)->first();

    $pdf = Pdf::loadView('ouvidoria_pdf', compact('manifestacao', 'movimentacao'));
    return $pdf->stream('manifestacao_' . $manifestacao->id . '.pdf');
}


}