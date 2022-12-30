<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab extends Model
{
    use HasFactory;
    protected $table = 'bab';
    protected $fillable = [
        'id_buku',
        'no_bab',
        'nama_bab',
        'keterangan',
    ];

    public function buku(){
        return $this->belongsTo(Buku::class, 'id_buku','id');
    }

    public function detail_kemajuan(){
        return $this->hasMany(DetailKemajuan::class, 'id_bab','id');
    }
}
