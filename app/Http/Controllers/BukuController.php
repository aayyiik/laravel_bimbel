<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $buku = Buku::all();
        return view('buku.index',['buku'=>$buku]);
    }

    public function create(){
        $buku = Buku::all();
        return view('buku.create',['buku'=>$buku]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_buku'=> 'required',
            'keterangan'=> 'required|max:300'
        ]);

        Buku::create($request->all());
        return redirect('/buku');
    }

    public function edit($id){
        $buku = Buku::find($id);
        return view ('buku.edit',['buku'=>$buku]);
    }

    //kita akan membuat function delete dahulu

    public function delete($id){
        $buku = Buku::find($id);
        $buku->delete($id);
        return redirect('/buku');
    }
    // oke sudah siap. mari kita jalankan kembali

    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect('/buku');
    }
}
