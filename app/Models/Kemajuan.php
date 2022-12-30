<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kemajuan extends Model
{
    use HasFactory;
    protected $table = 'kemajuan';
    protected $fillable = [
        'id_guru',
        'id_murid',
        'tgl',
        'status',
    ];

    public function murid(){
        return $this->belongsTo(Murid::class,'id_murid','id');
    }

    public function guru(){
        return $this->belongsTo(User::class,'id_guru','id');
    }

    // static function detail_kemajuan($id){
    //     $data = DetailKemajuan::where("id",$id)->first();
    //     return $data;
    // }
    
    public function detail_kemajuan(){
        return $this->hasMany(DetailKemajuan::class, 'id_kemajuan','id');
    }
}
