<?php

// app/Http/Controllers/OuvidoriaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manifestacao;
use App\Http\Controllers\Controller;
use App\Models\Anexo;
use App\Models\Avaliacao;
use App\Models\AvaliacaoPergunta;
use Illuminate\Support\Facades\DB;


class OuvidoriaController extends Controller
{

    public function relatorio()
    {
        $perguntas = [
            1 => 'Como você avalia a atual Gestão Administrativa do nosso Município?',
            2 => 'Como você avalia a questão de segurança pública em seu bairro/município?',
            3 => 'Como você avalia a situação da conservação do patrimônio histórico do seu bairro/município?',
            4 => 'Como você avalia o atendimento da Ouvidoria Geral do nosso Município?',
            5 => 'Como você avalia o atendimento e serviços da Assistência Social do nosso município?',
            6 => 'Como você avalia o atendimento e serviços da Educação do nosso município?',
            7 => 'Como você avalia o atendimento e serviços da Saúde do nosso município?',
            8 => 'Como você avalia o empenho da gestão no fortalecimento da cultura e tradições em seu Município?',
            9 => 'Como você avalia o fortalecimento e investimento em práticas esportivas e lúdicas em seu bairro/município?',
            10 => 'Como você avalia o serviço de coleta de lixo em seu bairro/município?',
            11 => 'Como você avalia o serviço de conservação de limpeza das ruas em seu bairro/município?',
            // … continue até 14
        ];

        $relatorio = [];

        foreach ($perguntas as $i => $texto) {
            $respostas = AvaliacaoPergunta::select(
                DB::raw("SUM(CASE WHEN resposta{$i}=2 THEN 1 ELSE 0 END) as muito_insatisfeito"),
                DB::raw("SUM(CASE WHEN resposta{$i}=4 THEN 1 ELSE 0 END) as insatisfeito"),
                DB::raw("SUM(CASE WHEN resposta{$i}=6 THEN 1 ELSE 0 END) as neutro"),
                DB::raw("SUM(CASE WHEN resposta{$i}=8 THEN 1 ELSE 0 END) as satisfeito"),
                DB::raw("SUM(CASE WHEN resposta{$i}=10 THEN 1 ELSE 0 END) as muito_satisfeito"),
                DB::raw("COUNT(resposta{$i}) as total")
            )->first();

            $relatorio[] = [
                'pergunta' => $texto,
                'muito_insatisfeito' => $respostas->muito_insatisfeito,
                'insatisfeito' => $respostas->insatisfeito,
                'neutro' => $respostas->neutro,
                'satisfeito' => $respostas->satisfeito,
                'muito_satisfeito' => $respostas->muito_satisfeito,
                'total' => $respostas->total,
            ];
        }

        return view('avaliacoesrelatorio', compact('relatorio'));
    }

    public function avaliacaoperguntaCreate()
    {
        return view('avaliacaopergunta'); // sua Blade
    }
    public function avaliacaoperguntaStore(Request $request)
    {
        $validated = $request->validate([
            'cpf' => 'required|string',
            'o_mensagem' => 'nullable|string',
            // Validação das respostas
            'resposta1' => 'required|integer',
            'resposta2' => 'required|integer',
            'resposta3' => 'required|integer',
            'resposta4' => 'required|integer',
            'resposta5' => 'required|integer',
            'resposta6' => 'required|integer',
            'resposta7' => 'required|integer',
            'resposta8' => 'required|integer',
            'resposta9' => 'required|integer',
            'resposta10' => 'required|integer',
            'resposta11' => 'required|integer',
            'resposta12' => 'required|integer',
            'resposta13' => 'required|integer',
            'resposta14' => 'required|integer',
        ]);

        AvaliacaoPergunta::create($validated);

        return redirect()->back()->with('success', 'Pesquisa enviada com sucesso!');
    }

    public function avaliacaoCreate()
    {
        return view('avaliacao'); // sua Blade
    }

    public function avaliacaoStore(Request $request)
    {
        $validated = $request->validate([
            'nota' => 'required|integer|min:0|max:10',
            'pagina' => 'required|string',
            'nome' => 'required|string|max:255',
            'mensagem' => 'nullable|string',
            'email' => 'nullable|email|max:255',
        ]);

        Avaliacao::create($validated);

        return redirect()->back()->with('success', 'Avaliação salva com sucesso!');
    }

    public function index(Request $request)
    {
        $query = Avaliacao::query();

        // filtro por id
        if ($request->filled('id')) {
            $query->where('id', 'like', '%' . $request->id . '%');
        }

        // filtro por nome
        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . $request->nome . '%');
        }

        // filtro por página
        if ($request->filled('pagina')) {
            $query->where('pagina', $request->pagina);
        }

        // filtro por anonimato
        if ($request->has('mostrar_anonimos') && $request->mostrar_anonimos === '0') {
            $query->where('anonimo', 0);
        } elseif ($request->has('mostrar_anonimos') && $request->mostrar_anonimos === '1') {
            $query->where('anonimo', 1);
        }

        $avaliacoes = $query->paginate(15);

        return view('satisfacaodapag', compact('avaliacoes'));
    }

    public function create()
    {
        return view('principal'); // sua Blade
    }
    public function show(Request $request)
    {
        $manifestacoes = Manifestacao::find($request->id);
        //return $manifestacao;
        return view('show', compact('manifestacoes'));

    }
    public function update(Request $request, $id)
    {

        $manifestacao = Manifestacao::find($id);
        $manifestacao->update([
            'anonimo' => $request->anonimo ?? 'nao',
            'nome' => $request->name,
            'cpf' => $request->cpf,
            'data_nascimento' => $request->date,
            'sexo' => $request->gender,
            'grau_instrucao' => $request->grau_instrucao,
            'email' => $request->email,
            'tipo_telefone' => $request->tipo_telefone,
            'telefone' => $request->contato,
            'secretaria' => $request->secretaria, // ID correto vindo do select
            'tipo_assunto' => $request->tipo_assunto,
            'forma_contato' => $request->forma_contato,
            'natureza' => $request->natureza,
            'mensagem' => $request->observacoes,
            'anexos' => $request->anexos,

        ]);
        return redirect()->route('dashboard')->with('success', 'Manifestação atualizada com sucesso!');
    }

    public function edit(Request $request)
    {
        $manifestacao = Manifestacao::find($request->id);
        return view('edicao', compact('manifestacao'));
    }
    public function destroy(Request $request, $id)
    {
        $manifestacao = Manifestacao::find($id);
        $manifestacao->delete();
        return redirect()->route('ouvidoria.form')->with('success', 'Manifestação excluída com sucesso!');
    }

    public function dashboard(Request $request)
    {


        $query = Manifestacao::query();
    
    
        
    // Aplicando filtros
    if ($request->filled('filter.inicio')) {
        $query->whereDate('created_at', '>=', $request->input('filter.inicio'));
    }


        // se quiser já trazer os anexos junto
        $query->with('anexos');


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

        if ($request->filled('filter.protocolo')) {
            $query->where('id', 'like', "%" . $request->input('filter.protocolo') . "%");
        }

        if ($request->filled('filter.nome')) {
            $query->where('nome', 'like', "%" . $request->input('filter.nome') . "%");
        }

        if ($request->filled('filter.mensagem')) {
            $query->where('mensagem', 'like', "%" . $request->input('filter.mensagem') . "%");
        }

        if ($request->filled('filter.secretaria')) {
            $query->where('secretaria', 'like', "%" . $request->input('filter.secretaria') . "%");
        }

        if ($request->filled('filter.origem')) {
            $query->where('origem', $request->input('filter.origem'));
        }

        if ($request->filled('filter.natureza')) {
            $query->where('natureza', $request->input('filter.natureza'));
        }




        if ($request->filled('filter.anexos')) {
            if ($request->input('filter.anexos') === 'sim') {
                $query->whereHas('anexos'); // só com anexos
            }
            if ($request->input('filter.anexos') === 'nao') {
                $query->whereDoesntHave('anexos'); // só sem anexos
            }
        }


        $manifestacoes = $query->get();

        return view('dashboard', compact('manifestacoes'));
    }



    public function store(Request $request)
    {

        // dd($request->all());

        $query = Manifestacao::query()->with('anexos');

$manifestacao = Manifestacao::create([
            'anonimo' => $request->anonimo ? 1 : 0,
            'nome' => $request->name,
            'cpf' => $request->cpf,
            'data_nascimento' => $request->date,
            'sexo' => $request->gender,
            'grau_instrucao' => $request->grau_instrucao,
            'email' => $request->email,
            'tipo_telefone' => $request->tipo_telefone,
            'telefone' => $request->contato,
            'secretaria' => $request->secretaria, // ID correto vindo do select
            'tipo_assunto' => $request->tipo_assunto,
            'forma_contato' => $request->forma_contato,
            'natureza' => $request->natureza,
            'mensagem' => $request->observacoes,
            
            
            //'anexos' => $request->anexos, // tratar isso depois
        ]);
 $request->validate([
            'anexos.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',

        ]);

        // Salvar anexos se houver
        if ($request->hasFile('anexos')) {
            foreach ($request->file('anexos') as $arquivo) {
                $path = $arquivo->store('anexos', 'public');
        $path = $arquivo->store('anexos', 'public');
        Anexo::create([
            'manifestacao_id' => $manifestacao->id,
            'caminho_arquivo' => $path,
        ]);
    }
}
        if ($request->has('anonimo')) {
            // valida apenas os campos comuns à manifestação
            $validated = $request->validate([
                'mensagem' => 'required|string',
            ]);
            $validated['name'] = null;
            $validated['cpf'] = null;
            $validated['data_nascimento'] = null;
            $validated['sexo'] = null;
            $validated['grau_instrucao'] = null;
            $validated['email'] = null;
            $validated['tipo_telefone'] = null;
            $validated['telefone'] = null;
            $validated['anonimo'] = 1;
        } else {
            // valida tudo
            $validated = $request->validate([
                'nome' => 'required|string|max:255',
                'email' => 'required|email',
                'mensagem' => 'required|string',
                'cpf' => 'nullable|string|max:14',
                'data_nascimento' => 'nullable|date',
                'sexo' => 'nullable|string|max:20',
                'grau_instrucao' => 'nullable|string|max:50',
                'tipo_telefone' => 'nullable|string|max:20',
                'telefone' => 'nullable|string|max:15',
            ]);
            $validated['anonimo'] = 0;
        }
        

       

        return redirect()->back()->with('success', 'Manifestação enviada com sucesso!');
    }






}

