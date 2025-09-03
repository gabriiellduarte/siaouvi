<?php

// app/Http/Controllers/OuvidoriaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manifestacao;
use App\Http\Controllers\Controller;


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
        $manifestacao = Manifestacao::find($request->id);
        $manifestacao->update([
    'nome' => $request->name,
    'cpf' => $request->cpf,
    'data_nascimento' => $request->date,
    'sexo' => $request->gender,
    'grau_instrucao' => $request->grau_instrucao,
    'email' => $request->email,
    'tipo_telefone' => $request->tipo_telefone,
    'telefone' => $request->contato,
    'secretaria_id' => $request->secretaria_id, // ID correto vindo do select
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
    public function dashboard()
    {
        $manifestacoes = Manifestacao::all();
        return view('dashboard', ['manifestacoes' => $manifestacoes]);
    }

    public function store(Request $request)
    {

   

$manifestacao = Manifestacao::create([
    'nome' => $request->name,
    'cpf' => $request->cpf,
    'data_nascimento' => $request->date,
    'sexo' => $request->gender,
    'grau_instrucao' => $request->grau_instrucao,
    'email' => $request->email,
    'tipo_telefone' => $request->tipo_telefone,
    'telefone' => $request->contato,
    'secretaria_id' => $request->secretaria_id, // ID correto vindo do select
    'tipo_assunto' => $request->tipo_assunto,
    'forma_contato' => $request->forma_contato,
    'natureza' => $request->natureza,
    'mensagem' => $request->observacoes,
]);

/*if ($request->hasFile('anexos')) {
    foreach ($request->file('anexos') as $file) {
        $path = $file->store('anexos', 'public');
        Anexo::create([
            'manifestacao_id' => $manifestacao->id,
            'caminho_arquivo' => $path,
        ]);
    }
}*/


        return redirect()->back()->with('success', 'Manifestação enviada com sucesso!');
    }
}
