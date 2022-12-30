<?php

namespace App\Http\Controllers;

use App\Models\Bab;
use App\Models\DetailKemajuan;
use App\Models\Kemajuan;
use App\Models\User;
use Illuminate\Http\Request;

class KemajuanController extends Controller
{

    public function index(){
        $kemajuan = Kemajuan::all();
        return view('kemajuan.index',['kemajuan'=>$kemajuan]);
    }

    public function create(){
        $bab = Bab::all();
        $kemajuan = Kemajuan::all();
        $guru = User::where('id_role','=','2')->get();
        $murid = User::where('id_role','=','4')->get();
        return view('kemajuan.create',['kemajuan'=>$kemajuan], compact('bab','guru','murid'));
    }


    public function store (Request $request){
     
     
    $data = $request->all();
    $kemajuan = new Kemajuan;
    $kemajuan->id_guru = $data['id_guru'];
    $kemajuan->id_murid = $data['id_murid'];
    $kemajuan->tgl = $data['tgl'];
    $kemajuan->status = $data['status'];
    $kemajuan->save();

    // $detailkemajuan = new DetailKemajuan;
    // $detailkemajuan->id_kemajuan = $kemajuan->id;
    // $detailkemajuan->id_bab = $data['id_bab'];
    // $detailkemajuan->keterangan = $data['keterangan'];
    // $detailkemajuan->save();
    

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
      return redirect('/kemajuan/create');
    // dd($request->all());

  }

  public function detailOrtu(){
      $user = User::where('id_role','=','4')->get();
      $kemajuan = Kemajuan::all();
      return view('dashboard.ortu.detail', ['kemajuan'=>$kemajuan], compact('user'));
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
