<?php

// app/Http/Controllers/OuvidoriaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manifestacao;
use App\Http\Controllers\Controller;
use App\Models\Anexo;

class OuvidoriaController extends Controller
{
    public function create()
    {
        return view('principal'); // sua Blade
    }
    public function show(Request $request)
    {
        $manifestacao = Manifestacao::find($request->id);
        //return $manifestacao;
        return view('show', compact('manifestacao'));
        
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

// se quiser já trazer os anexos junto
$query->with('anexos');

        
    // Aplicando filtros
    if ($request->filled('filter.anonimo')){
        $query->where('anonimo', $request->input('filter.anonimo'));
    }
    if ($request->filled('filter.inicio')) {
        $query->whereDate('created_at', '>=', $request->input('filter.inicio'));
    }

    if ($request->filled('filter.fim')) {
        $query->whereDate('updated_at', '<=', $request->input('filter.fim'));
    }

    if ($request->filled('filter.protocolo')) {
        $query->where('id', 'like', "%".$request->input('filter.protocolo')."%");
    }

    if ($request->filled('filter.nome')) {
        $query->where('nome', 'like', "%".$request->input('filter.nome')."%");
    }

    if ($request->filled('filter.mensagem')) {
        $query->where('mensagem', 'like', "%".$request->input('filter.mensagem')."%");
    }

    if ($request->filled('filter.secretaria')) {
        $query->where('secretaria', 'like', "%".$request->input('filter.secretaria')."%");
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
]);
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

    Manifestacao::create($validated);

if ($request->hasFile('anexos')) {
    foreach ($request->file('anexos') as $file) {
        $path = $file->store('anexos', 'public');

        Anexo::create([
            'manifestacao_id' => $manifestacao->id,
            'caminho_arquivo' => $path,
        ]);
    }
    $manifestacao->update([
                    'anexos' => $request->hasFile('anexos') ? 'sim' : 'nao',
                ]);
}


    return back()->with('success','Manifestação enviada!');
}

            




    }

