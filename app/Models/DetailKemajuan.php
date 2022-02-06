<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKemajuan extends Model
{
    use HasFactory;
    protected $table = 'detail_kemajuan';
    protected $fillable = [
        'id_kemajuan',
        'id_bab',
        'keterangan',
    ];

    public function kemajuan(){
        return $this->belongsTo(kemajuan::class,'id_kemajuan','id');
    }

    public function bab(){
        return $this->belongsTo(Bab::class,'id_bab','id');
    }
}
