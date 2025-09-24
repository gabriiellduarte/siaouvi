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
        return view('editarlistadefuncao', compact('roles'));
    }

    public function update(Request $request, $id) 
    {
      $request -> validate([
        'name' => 'required|unique: roles.name', $id,
      ]);
      $role = Role::findById($id);
      $role->name-$request->input('name');
      $role->save();
      return redirect()->route('listadefuncao.index')->with('Sucesso! Função alterada com sucesso!');
    }

    public function store(Request $request)
    {
      //dd($request);
  
    Role::create(['name'=>$request->input('name')]);
      return redirect()->route('listadefuncao.index')->with('Sucesso! Função criada com sucesso!');
    }
}