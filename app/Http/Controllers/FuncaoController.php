<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

  class FuncaoController extends Controller
  {
 
    public function index() 
    {

  $roles = Role::all();
    return view('listadefuncao', compact('roles'));
    }

    public function create()
    {
      return view('/criarlistadefuncao');
    }

    public function edit($id)
    {
      $role = Role::findById($id);
        return view('editarlistadefuncao', compact('role'));
    }

    public function update(Request $request, $id) 
    {
  
      $role = Role::findById($id);
      $role->name = $request->input('name');
      $role->save();
        return redirect()->route('listadefuncao.index')->with('success', 'Função alterada com sucesso!');    }

    public function store(Request $request)
    {
      //dd($request);
  
    Role::create(['name'=>$request->input('name')]);
      return redirect()->route('listadefuncao.index')->with('Sucesso! Função criada com sucesso!');
    }

    public function destroy($id) 
    {
      $role = Role::findOrFail($id);
      $role->delete();
        return redirect()->route('listadefuncao.index')->with('success', 'Função excluída com sucesso!');

    }
}