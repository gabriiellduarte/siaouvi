<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    //
    public function index()
    {

        $permissions = Permission::all();
        return view('listagempermissao', compact('permissions'));
    }
    public function create()
    {
        return view('criarpermissao');
    }

    public function edit($id)
    {
        $permission = Permission::findById($id);
        return view('editarpermissao', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$id,
        ]);

        $permission = Permission::findById($id);
        $permission->name = $request->input('name');
        $permission->save();

        return redirect()->route('permissoes.index')->with('success', 'Permissão atualizada com sucesso.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->input('name')]);

        return redirect()->back()->with('success', 'Permissão criada com sucesso.');
    }

    }

