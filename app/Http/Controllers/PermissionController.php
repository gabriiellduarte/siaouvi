<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    //
    public function index()
    {
        $ouvidorgeral = Role::firstOrCreate(['name' => 'ouvidor geral']);
        $usuariocomum = Role::firstOrCreate(['name' => 'usuário comum']);

        $editpermission = Permission::create(['name' => 'editar manifestação']);
        $deletepermission = Permission::create(['name' => 'deletar manifestação']);
        $viewpermission = Permission::create(['name' => 'visualizar manifestação']);

        $ouvidorgeral->givePermissionTo([$editpermission, $deletepermission, $viewpermission]);
        $usuariocomum->givePermissionTo([$viewpermission]);


        $permissions = Permission::all();
        return view('listagempermissao', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->input('name')]);

        return redirect()->back()->with('success', 'Permissão criada com sucesso.');
    }
    public function givePermission(Request $request, $userId)
    {
        $user = \App\Models\User::find($userId);
        $permission = $request->input('permission');

        if ($user && $permission) {
            $user->givePermissionTo($permission);
            return redirect()->back()->with('success', 'Permissão concedida com sucesso.');
        } else {
            return redirect()->back()->with('error', 'Usuário ou permissão inválida.');
        }
        }
    }

