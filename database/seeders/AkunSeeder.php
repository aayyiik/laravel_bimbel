<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama'=> 'Aurinia Ransayana',
                'email'=> 'aurin@gmail.com',
                'password'=> bcrypt('secret'),
                'gender'=> 'F',
                'tgl_lahir'=> '2006-01-25',
                'kota_lahir'=>'Surabaya',
                'nama_ortu'=>'Badriah',
                'alamat_ortu'=>'Jl Manunggal No 9 Barat',
                'hp'=>'08523415',
                'tgl_masuk'=> '2019-09-10',
                'status'=> 1,
                'id_role' => 4
            ],
            [
                'nama'=> 'Axcel Cakrawala',
                'email'=> 'staf@gmail.com',
                'password'=> bcrypt('secret'),
                'gender'=> 'M',
                'tgl_lahir'=> null,
                'kota_lahir'=>null,
                'nama_ortu'=>null,
                'alamat_ortu'=>null,
                'hp'=>'08515243',
                'tgl_masuk'=> null,
                'status'=> 1,
                'id_role' => 1
            ],
            [
                'nama'=> 'Firdaus Salaman',
                'email'=> 'guru@gmail.com',
                'password'=> bcrypt('secret'),
                'gender'=> 'M',
                'tgl_lahir'=> null,
                'kota_lahir'=>null,
                'nama_ortu'=>null,
                'alamat_ortu'=>null,
                'hp'=>'08975243',
                'tgl_masuk'=> null,
                'status'=> 1,
                'id_role' => 2
            ],
            [
                'nama'=> 'Badriah',
                'email'=> 'ortu@gmail.com',
                'password'=> bcrypt('secret'),
                'gender'=> 'F',
                'tgl_lahir'=> null,
                'kota_lahir'=>null,
                'nama_ortu'=>null,
                'alamat_ortu'=>null,
                'hp'=>'0812310',
                'tgl_masuk'=> null,
                'status'=> 1,
                'id_role' => 3
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
        
    }
}
