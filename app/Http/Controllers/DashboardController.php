<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\Buku;
use App\Models\Kemajuan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view ('dashboard.index');
    }
    public function indexStaf(){
        $murid  = User::where('id_role','=','4')->count();
        $guru = User::where('id_role','=','2')->count();
        $staf = User::where('id_role','=','1')->count();
        $ortu = User::where('id_role','=','3')->count();
        return view('dashboard.staf.pages', compact('murid','guru','staf','ortu'));
        
    }

    public function indexGuru(){
        $murid  = User::where('id_role','=','4')->count();
        $bab = Bab::all()->count();
        $buku = Buku::all()->count();
        $kemajuan = Kemajuan::all()->count();
        return view('dashboard.guru.pages', compact('murid','bab','buku','kemajuan'));
        
    }
}
