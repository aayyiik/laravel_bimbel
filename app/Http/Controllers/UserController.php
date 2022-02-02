<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(){
        $user = User::where('id_role','=','4')->get();
        return view('murid.index',['user'=>$user]);
    }

    public function indexGuru(){
        $user = User::where('id_role','=','2')->get();
        return view('guru.index',['user'=>$user]);
    }

    public function indexOrtu(){
        $user = User::where('id_role','=','3')->get();
        return view('ortu.index',['user'=>$user]);
    }

    public function create(){
       
        $user = User::where('id_role','=','4')->get();
        return view ('murid.create', $user);

    }
    

    public function store(Request $request){
   
        User::create([

            'nama' => request('nama'),
            'id_role' => 4,
            'gender' => request('gender'),
            'tgl_lahir' => request('tgl_lahir'),
            'kota_lahir' => request('kota_lahir'),
            'nama_ortu' => request('nama_ortu'), 
            'alamat_ortu' => request('alamat_ortu'),
            'hp' => request('hp'),   
            'tgl_masuk' => request('tgl_masuk'), 
            'status' => 1,  
            'email' => request('email'),      
            'password'=>bcrypt('secret'),
            'remember_token' => Str::random(10),
            
            
       ]);

        return redirect('/murid');
    }

    public function edit($id){
        $user = User::find($id);
        return view('murid.edit',['user'=>$user]);
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect('/murid');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete($id);
        return redirect('/murid');
    }
}
