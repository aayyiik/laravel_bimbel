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
            'keterangan'=> 'required|max:300',
        ]);

        Buku::create($request->all());
        return redirect('/buku');
    }
}
