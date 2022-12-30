<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

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
}
