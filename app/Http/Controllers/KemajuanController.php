<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\DetailKemajuan;
use App\Models\Kemajuan;
use App\Models\Murid;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KemajuanController extends Controller
{

    public function index($id){
        $guru = User::all();
        $murid = Murid::all();
        $kemajuan = Kemajuan::where('id_guru','=',Auth::user()->id)->get();
        return view('kemajuan.index',['kemajuan'=>$kemajuan], compact('guru', 'murid'));
    }

    public function create($id){
        $bab = Bab::all();
        $kemajuan = Kemajuan::all();
        $guru = User::where('id','=',Auth::user()->id)->get();
        $murid = Murid::all();
        return view('kemajuan.create',['kemajuan'=>$kemajuan], compact('bab','guru','murid'));
    }


    public function store (Request $request, $id){
        $guru = User::find($id);
        
        $data = $request->all();
        $kemajuan = new Kemajuan;
        $kemajuan->id_guru = $data['id_guru'];
        $kemajuan->id_murid = $data['id_murid'];
        $kemajuan->tgl = $data['tgl'];
        $kemajuan->status = $data['status'];
        $kemajuan->save();

        if(count($request->id_bab) > 0){
            foreach($data['id_bab'] as $item => $value){
                $data2 = array(
                    'id_kemajuan' => $kemajuan->id,
                    'id_bab'=> $data['id_bab'][$item],
                    'keterangan'=> $data['keterangan'][$item],
                );
                DetailKemajuan::create($data2);
            }
        }
        return redirect('/kemajuan/{id}');
        // dd($request->all());

  }

  public function detailOrtu(){
      $murid = Murid::all();
      $kemajuan = Kemajuan::all();
      return view('dashboard.ortu.detail', ['kemajuan'=>$kemajuan], compact('murid'));
  }

  public function getMonth($id){
      $month = Kemajuan::where('id_murid',$id)->pluck("nama","id");
      return json_encode($month);
  }

  public function getData($id){
      $data = Kemajuan::where('id_murid','=',$id)->get();
      return view ('dashboard.ortu.show',['data'=>$data]);
  }

  public function detail($id){
    $kemajuan = Kemajuan::find($id);
    // $detail = DetailKemajuan::where('id_kemajuan','=',$id)->get();
    // $murid = User::where('id_role','=','4')->get();
    // $guru =  User::where('id_role','=','2')->get();
    return view('kemajuan.detail',['kemajuan'=>$kemajuan]);
  }
}
