<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $role = Role::all();
        return view('role.index',['role'=>$role]);
    }

    public function create(){
        return view('role.create');
    }

    public function store(Request $request){
        Role::create($request->all());
        return redirect('/role');
    }

    public function edit($id){
        $role = Role::find($id);
        return view('role.edit',['role'=>$role]);
    }

    public function update(Request $request,$id){
        $role = Role::find($id);
        $role->update($request->all());
        return redirect('/role');
    }
}
