<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murid';
    protected $fillable = [
        'id',
        'nama',
        'gender',
        'tgl_lahir',
        'kota_lahir',
        'tgl_lahir',
        'nama_ortu',
    ];

    public function kemajuan(){
        return $this->hasMany(Kemajuan::class, 'id_kemajuan');
    }
}
