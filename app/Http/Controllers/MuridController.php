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
}
