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
      return view('criarlistadefuncao');
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
        return redirect()->route('listadefuncao.index')->with('success', 'Função alterada com sucesso!');
      
    
    }
      
    public function store(Request $request)
    {

  
    Role::create(['name'=>$request->input('name')]);
      return redirect()->route('listadefuncao.index')->with('Sucesso! Função criada com sucesso!');
    }

    public function destroy($id) 
    {
      $role = Role::findOrFail($id);
      $role->delete();
        return redirect()->route('listadefuncao.index')->with('success', 'Função excluída com sucesso!');

    }
<<<<<<< HEAD

      // Exibe o formulário para atribuir permissões a uma função
    public function showAssignForm($id)
    {
        $role = Role::findById($id); // busca a função pelo ID
        $permissions = Permission::all(); // pega todas as permissões
        return view('atribuirpermissoesafuncao', compact('role', 'permissions'));
    }

    // Salva as permissões atribuídas à função
    public function assignPermissionRole(Request $request, $id)
    {
        $role = Role::findById($id); // busca a função pelo ID
        $permissions = $request->input('permissions', []); // pega array de permissões do formulário

        // Sincroniza as permissões: remove as que não foram selecionadas e adiciona as novas
        $role->syncPermissions($permissions);

        return redirect()->route('listadefuncao.index')->with('success', 'Permissões atribuídas à função com sucesso!');
    }
    
=======
>>>>>>> gustavo
}