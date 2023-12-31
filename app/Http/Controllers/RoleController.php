<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('roles.index',compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all();
        return view('roles.create',compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $role=Role::create($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index',$role)->with('success', 'Rol creado satisfactoriamente.');
    }


    public function show(Role $role)
    {
        return view('roles.show',compact('role'));
    }


    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('roles.edit',compact('role','permissions'));
    }


    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index',$role)->with('success', 'Rol actualizado satisfactoriamente');
    }


    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index',$role)->with('success', 'Rol eliminado satisfactoriamente');
    }
}
