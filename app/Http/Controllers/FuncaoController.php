<?php 
namespace App\Http\Controllers;

use App\Models\User;
use  Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

Role::create(['name' => 'Ouvidor Geral']);
Role::create([ 'name' => 'Ouvidor Setorial']);

// Para atribuir função ao usuário
$user = User::find (1); 
$user-> assignRole('Ouvidor Geral');

$user = User::find (2);
$user-> assignRole('Ouvidor Setorial');

$roles = Role::all();
  
