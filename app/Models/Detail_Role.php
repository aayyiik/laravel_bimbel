<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Role extends Model
{
    use HasFactory;
    protected $table = 'detail_role';
    protected $fillable = [
        'id_role',
        'id_guru',
        'id_staf',
        'id_ortu',
    ];

    public function role(){
        return $this->belongsToMany('');
    }

}
