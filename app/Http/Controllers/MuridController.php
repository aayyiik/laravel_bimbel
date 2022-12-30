<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MuridController extends Controller
{
    public function index(){
            $murid = Murid::all();
            return view('murid.index',['murid'=>$murid]);
    }

    public function edit($id){
        $murid = Murid::find($id);
        return view('murid.edit', ['murid'=>$murid]);

    }

    public function update(Request $request, $id){
        $murid = Murid::find($id);
        $murid->update($request->all());
        return redirect('/murid');

    }

    public function delete($id){
        $murid = Murid::find($id);
        $murid->delete($id);
        return redirect('/murid');
    }

    public function create(){
        return view('murid.create');
    }

    public function store(){
   
        Murid::create([

            'nama' => request('nama'),
            'gender' => request('gender'),
            'tgl_lahir' => request('tgl_lahir'),
            'kota_lahir' => request('kota_lahir'),
            'nama_ortu' => request('nama_ortu'), 
            'tgl_masuk' => request('tgl_masuk'), 
            'status' => 1,       
            'password'=>bcrypt('peserta_didik_baru'),
            'remember_token' => Str::random(10),         
       ]);

        return redirect('/murid');
    }
}
