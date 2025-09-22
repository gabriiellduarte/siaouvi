<?php
namespace App\Http\Controllers;
use App\Models\User; 
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('listagemusuariopermissao', compact('users'));
    }
    //
    public function show($id)
    {
        $user = User::find($id);
        return view('detalhesusuario', compact('user'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('edicaousuario', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Atualize outros campos conforme necessário
        $user->save();

        return redirect()->route('usuarios.show', ['id' => $id])->with('success', 'Usuário atualizado com sucesso.');
    }

}
