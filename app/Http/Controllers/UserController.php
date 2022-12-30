<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
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
        return view('user.guru.index',['user'=>$user]);
    }

    public function indexStaf(){
        $user = User::where('id_role','=','1')->get();
        return view('user.staf.index',['user'=>$user]);
    }

    public function indexOrtu(){
        $user = User::where('id_role','=','3')->get();
        return view('user.ortu.index',['user'=>$user]);
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

    public function createGuru(){
       
        $user = User::where('id_role','=','2')->get();
        return view ('user.guru.create', $user);

    }
    
    public function storeGuru(Request $request){
   
        User::create([

            'nama' => request('nama'),
            'id_role' => 2,
            'gender' => request('gender'),
            'hp' => request('hp'),   
            'status' => 1,  
            'email' => request('email'),      
            'password'=>bcrypt('secret'),
            'remember_token' => Str::random(10),         
       ]);

        return redirect('/guru');
    }

    public function createOrtu(){
       
        $user = User::where('id_role','=','3')->get();
        return view ('user.ortu.create', $user);

    }
    
    public function storeOrtu(Request $request){
   
        User::create([

            'nama' => request('nama'),
            'id_role' => 3,
            'gender' => request('gender'),
            'hp' => request('hp'),   
            'status' => 1,  
            'email' => request('email'),      
            'password'=>bcrypt('secret'),
            'remember_token' => Str::random(10),         
       ]);

        return redirect('/ortu');
    }

    public function createStaf(){
       
        $user = User::where('id_role','=','1')->get();
        return view ('user.ortu.create', $user);

    }
    
    public function storeStaf(Request $request){
   
        User::create([

            'nama' => request('nama'),
            'id_role' => 1,
            'gender' => request('gender'),
            'hp' => request('hp'),   
            'status' => 1,  
            'email' => request('email'),      
            'password'=>bcrypt('secret'),
            'remember_token' => Str::random(10),         
       ]);

        return redirect('/staf');
    }


    public function editStaf($id){
        $staf = User::find($id);
        return view('user.staf.edit',['staf'=>$staf]);
    }

    public function updateStaf(Request $request, $id){
        $staf = User::find($id);
        $staf->update($request->all());
        return redirect('/staf');
    }

    public function editGuru($id){
        $guru = User::find($id);
        return view('user.guru.edit',['guru'=>$guru]);
    }

    public function updateGuru(Request $request, $id){
        $guru = User::find($id);
        $guru->update($request->all());
        return redirect('/guru');
    }


    public function editortu($id){
        $ortu = User::find($id);
        return view('user.ortu.edit',['ortu'=>$ortu]);
    }

    public function updateortu(Request $request, $id){
        $ortu = User::find($id);
        $ortu->update($request->all());
        return redirect('/ortu');
    }

    public function deleteStaf($id){
        $user = User::find($id);
        $user->delete($id);
        return redirect('/staf');
    }

    public function deleteGuru($id){
        $user = User::find($id);
        $user->delete($id);
        return redirect('/guru');
    }

    public function deleteOrtu($id){
        $user = User::find($id);
        $user->delete($id);
        return redirect('/ortu');
    }

    public function tambah(){
       
        $user = User::all();
        $role = Role::where('id','<=','3')->get();
        return view ('user.create', ['user'=>$user], compact('role'));

    }
    public function proses(Request $request){
   
        User::create([

            'nama' => request('nama'),
            'id_role' => request('id_role'),
            'gender' => request('gender'),
            'hp' => request('hp'),   
            'status' => 1,  
            'email' => request('email'),      
            'password'=>bcrypt('secret'),
            'remember_token' => Str::random(10),         
       ]);

        return redirect('/create/user');
    }
}
