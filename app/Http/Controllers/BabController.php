<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Buku;
use Illuminate\Http\Request;

class BabController extends Controller
{
    public function index($id){
        $bab = Buku::find($id);
        $bab = Bab::where('id_buku','=',$id)->get();
        return view('bab.index',['bab'=>$bab]);
    }

    public function create(){
        $buku = Buku::all();
        $bab = Bab::all();
        return view('bab/create',['bab'=>$bab], compact('buku'));
    }

    public function store(Request $request){

        Bab::create($request->all());
        return redirect('/buku');
    }

    public function edit($id){
        $bab = Bab::find($id);
        // $buku = Buku::where('id_buku','=',$id)->get();
        return view('bab.edit',['bab'=>$bab]);
    }

    public function update(Request $request, $id){
        $bab = Bab::find($id);
        $bab->update($request->all());
        return redirect('/buku');
    }
   
}
