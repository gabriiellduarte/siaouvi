<?php
namespace App\Http\Controllers;
use App\Models\User; 
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $users = User::all();
         $users = User::with(['roles', 'permissions'])->get();
    $roles = \Spatie\Permission\Models\Role::all();
    $permissions = \Spatie\Permission\Models\Permission::all();

    return view('listagemusuariopermissao', compact('users','roles','permissions'));
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

        return redirect()->route('usuarios.index', ['id' => $id])->with('success', 'Usuário atualizado com sucesso.');
    }
    public function create()
    {

        return view('criausuario');
    }
    public function store(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Salve outros campos conforme necessário
        $user->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso.');
    }

    
}
