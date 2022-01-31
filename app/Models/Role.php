<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $fillable = ['jenis_role'];

    public function detail_role(){
        return $this->hasMany(Detail_Role::class,['id_ortu','id_guru','id_staf','id']);
    }
}
