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
                'nama'=> 'Axcel Cakrawala',
                'email'=> 'staf@gmail.com',
                'password'=> bcrypt('staf@gmail.com'),
                'gender'=> 'M',
                'hp'=>'08515243222',
                'status'=> 1,
                'id_role' => 1
            ],
            [
                'nama'=> 'Firdaus Salaman',
                'email'=> 'guru@gmail.com',
                'password'=> bcrypt('guru@gmail.com'),
                'gender'=> 'M',
                'hp'=>'089752431212',
                'status'=> 1,
                'id_role' => 2
            ],
            [
                'nama'=> 'Badriah',
                'email'=> 'ortu@gmail.com',
                'password'=> bcrypt('ortu@gmail.com'),
                'gender'=> 'F',
                'hp'=>'081231011122',
                'status'=> 1,
                'id_role' => 3
            ],
            [
                "nama"=> "Alyse Neeve",
                "gender"=> "F",
                "hp"=> "8735517764",
                "status"=> 1,
                "email"=> "aneeve0@furl.net",
                "id_role"=> 2,
                "password"=> "o0CRQIvorUY"
            ], 
            [
                "nama"=> "Donnamarie Morin",
                "gender"=> "F",
                "hp"=> "2136052209",
                "status"=> 1,
                "email"=> "dmorin1@marriott.com",
                "id_role"=> 2,
                "password"=> "M60J8q5A"
            ], 
            [
                "nama"=> "Suellen Biffen",
                "gender"=> "F",
                "hp"=> "3464898677",
                "status"=> 1,
                "email"=> "sbiffen2@archive.org",
                "id_role"=> 2,
                "password"=> "TvhgZC"
              ], 
              [
                "nama"=> "Urson Keys",
                "gender"=> "M",
                "hp"=> "1216019590",
                "status"=> 1,
                "email"=> "ukeys3@cnet.com",
                "id_role"=> 2,
                "password"=> "6TC57khd9"
              ], 
              [
                "nama"=> "Jean Flohard",
                "gender"=> "F",
                "hp"=> "3474445313",
                "status"=> 1,
                "email"=> "jflohard4@engadget.com",
                "id_role"=> 2,
                "password"=> "OGmcWu1FwTv"
              ], 
              [
                "nama"=> "Brooks Fynan",
                "gender"=> "F",
                "hp"=> "9903192134",
                "status"=> 1,
                "email"=> "bfynan5@parallels.com",
                "id_role"=> 2,
                "password"=> "48hYNuHH"
              ], 
              [
                "nama"=> "Trumann Tremlett",
                "gender"=> "M",
                "hp"=> "3625595587",
                "status"=> 1,
                "email"=> "ttremlett6@sciencedaily.com",
                "id_role"=> 2,
                "password"=> "F4H0mxfbQ"
              ], 
              [
                "nama"=> "Angelita Henryson",
                "gender"=> "M",
                "hp"=> "4388538070",
                "status"=> 1,
                "email"=> "ahenryson7@indiatimes.com",
                "id_role"=> 2,
                "password"=> "jl65FVTh3dz"
              ], 
              [
                "nama"=> "Lothaire Worsnip",
                "gender"=> "M",
                "hp"=> "7752499138",
                "status"=> 1,
                "email"=> "lworsnip8@quantcast.com",
                "id_role"=> 2,
                "password"=> "hsnum1dz"
              ], 
              [
                "nama"=> "Gilli Scamerdine",
                "gender"=> "F",
                "hp"=> "1484279236",
                "status"=> 1,
                "email"=> "gscamerdine9@harvard.edu",
                "id_role"=> 2,
                "password"=> "KsEBhGuToaKC"
              ], 
              [
                "nama"=> "Kelci Knolles-Green",
                "gender"=> "M",
                "hp"=> "1965104903",
                "status"=> 1,
                "email"=> "kknollesgreena@house.gov",
                "id_role"=> 2,
                "password"=> "kuhKOta"
              ], 
              [
                "nama"=> "Justine Beardsall",
                "gender"=> "M",
                "hp"=> "6385296215",
                "status"=> 1,
                "email"=> "jbeardsallb@livejournal.com",
                "id_role"=> 2,
                "password"=> "IX16whi"
              ], 
              [
                "nama"=> "Devonna Geake",
                "gender"=> "M",
                "hp"=> "8569642578",
                "status"=> 1,
                "email"=> "dgeakec@umich.edu",
                "id_role"=> 2,
                "password"=> "4zzq2TU"
              ], 
              [
                "nama"=> "Maisie Brompton",
                "gender"=> "F",
                "hp"=> "4525780991",
                "status"=> 1,
                "email"=> "mbromptond@unc.edu",
                "id_role"=> 2,
                "password"=> "nhoW8W"
              ], 
              [
                "nama"=> "Peirce Pachta",
                "gender"=> "M",
                "hp"=> "1414638383",
                "status"=> 1,
                "email"=> "ppachtae@washingtonpost.com",
                "id_role"=> 2,
                "password"=> "UXI8C0hOb"
              ], 
              [
                "nama"=> "Elwood Semered",
                "gender"=> "F",
                "hp"=> "6551189213",
                "status"=> 1,
                "email"=> "esemeredf@symantec.com",
                "id_role"=> 2,
                "password"=> "znOyG8KKOk"
              ], [
                "nama"=> "Gabe Inge",
                "gender"=> "F",
                "hp"=> "1182243717",
                "status"=> 1,
                "email"=> "gingeg@washingtonpost.com",
                "id_role"=> 2,
                "password"=> "AbvxaiU4xn"
              ], [
                "nama"=> "Aloin Ballentime",
                "gender"=> "F",
                "hp"=> "7821021988",
                "status"=> 1,
                "email"=> "aballentimeh@nps.gov",
                "id_role"=> 2,
                "password"=> "5FUHkep"
              ], [
                "nama"=> "Clarisse Djorvic",
                "gender"=> "F",
                "hp"=> "7889920930",
                "status"=> 1,
                "email"=> "cdjorvici@usda.gov",
                "id_role"=> 2,
                "password"=> "rD32Tt3"
              ], 
              [
                "nama"=> "Earle Kleisle",
                "gender"=> "M",
                "hp"=> "7189322082",
                "status"=> 1,
                "email"=> "ekleislej@springer.com",
                "id_role"=> 2,
                "password"=> "5ADddiIF6"
              ],
                
              [
                "nama"=> "Alexia McGlashan",
                "gender"=> "M",
                "hp"=> "5801770082",
                "status"=> 1,
                "email"=> "amcglashan0@photobucket.com",
                "id_role"=> 3,
                "password"=> "uOfcQYaqkZ1A"
              ], 
              [
                "nama"=> "Patrizia Hurch",
                "gender"=> "F",
                "hp"=> "2825482999",
                "status"=> 1,
                "email"=> "phurch1@nationalgeographic.com",
                "id_role"=> 3,
                "password"=> "TXoxQc7J"
              ], 
              [
                "nama"=> "Shep Alvarado",
                "gender"=> "M",
                "hp"=> "7634251255",
                "status"=> 1,
                "email"=> "salvarado2@theatlantic.com",
                "id_role"=> 3,
                "password"=> "Azcb14u"
              ], 
              [
                "nama"=> "Sashenka Trimbey",
                "gender"=> "F",
                "hp"=> "1968621572",
                "status"=> 1,
                "email"=> "strimbey3@typepad.com",
                "id_role"=> 3,
                "password"=> "m0xl3g"
              ], 
              [
                "nama"=> "Minta Dabell",
                "gender"=> "F",
                "hp"=> "1961375780",
                "status"=> 1,
                "email"=> "mdabell4@skyrock.com",
                "id_role"=> 3,
                "password"=> "31jiazNcY"
              ], 
              [
                "nama"=> "Chrystel Overel",
                "gender"=> "F",
                "hp"=> "8977916347",
                "status"=> 1,
                "email"=> "coverel5@earthlink.net",
                "id_role"=> 3,
                "password"=> "9nzrJYdIpjwG"
              ], 
              [
                "nama"=> "Nalani Shaefer",
                "gender"=> "M",
                "hp"=> "8805164632",
                "status"=> 1,
                "email"=> "nshaefer6@simplemachines.org",
                "id_role"=> 3,
                "password"=> "dNJnKt"
              ], 
              [
                "nama"=> "Liam Betancourt",
                "gender"=> "F",
                "hp"=> "2649131788",
                "status"=> 1,
                "email"=> "lbetancourt7@slate.com",
                "id_role"=> 3,
                "password"=> "3jAHKRY"
              ], 
              [
                "nama"=> "Emili Carthew",
                "gender"=> "F",
                "hp"=> "6322999699",
                "status"=> 1,
                "email"=> "ecarthew8@networkadvertising.org",
                "id_role"=> 3,
                "password"=> "5iRo2z7yRy"
              ], 
              [
                "nama"=> "Gonzales Root",
                "gender"=> "F",
                "hp"=> "6597784352",
                "status"=> 1,
                "email"=> "groot9@sohu.com",
                "id_role"=> 3,
                "password"=> "czW5dlL3"
              ], 
              [
                "nama"=> "Debera Pinkard",
                "gender"=> "F",
                "hp"=> "1115305453",
                "status"=> 1,
                "email"=> "dpinkarda@ebay.com",
                "id_role"=> 3,
                "password"=> "jcUBk1IwoqGH"
              ], 
              [
                "nama"=> "Mellisent Delucia",
                "gender"=> "M",
                "hp"=> "2946235314",
                "status"=> 1,
                "email"=> "mdeluciab@slideshare.net",
                "id_role"=> 3,
                "password"=> "zb8SE9X"
              ], 
              [
                "nama"=> "Stillman Britt",
                "gender"=> "F",
                "hp"=> "5195244507",
                "status"=> 1,
                "email"=> "sbrittc@accuweather.com",
                "id_role"=> 3,
                "password"=> "G1FYA1"
              ], 
              [
                "nama"=> "Dianemarie Arias",
                "gender"=> "M",
                "hp"=> "4161209149",
                "status"=> 1,
                "email"=> "dariasd@hud.gov",
                "id_role"=> 3,
                "password"=> "RKLdms"
              ], 
              [
                "nama"=> "Sutherlan Munks",
                "gender"=> "F",
                "hp"=> "1167115509",
                "status"=> 1,
                "email"=> "smunkse@lulu.com",
                "id_role"=> 3,
                "password"=> "viTNAkaTNAX"
              ], 
              [
                "nama"=> "Delcine Gusney",
                "gender"=> "M",
                "hp"=> "7051340096",
                "status"=> 1,
                "email"=> "dgusneyf@reverbnation.com",
                "id_role"=> 3,
                "password"=> "MGKST8rzcHhC"
              ], 
              [
                "nama"=> "Meg Croxford",
                "gender"=> "M",
                "hp"=> "1791344497",
                "status"=> 1,
                "email"=> "mcroxfordg@dedecms.com",
                "id_role"=> 3,
                "password"=> "gHiuHKot2"
              ], 
              [
                "nama"=> "Naomi Hullyer",
                "gender"=> "M",
                "hp"=> "7827466825",
                "status"=> 1,
                "email"=> "nhullyerh@51.la",
                "id_role"=> 3,
                "password"=> "CRdRau422DC"
              ], 
              [
                "nama"=> "Everard Cowx",
                "gender"=> "M",
                "hp"=> "6492874402",
                "status"=> 1,
                "email"=> "ecowxi@google.it",
                "id_role"=> 3,
                "password"=> "qFXmVs9hEon"
              ], 
              [
                "nama"=> "Lorant Cloute",
                "gender"=> "F",
                "hp"=> "4332536698",
                "status"=> 1,
                "email"=> "lcloutej@facebook.com",
                "id_role"=> 3,
                "password"=> "mXeLFzi86laO"
              ],
              
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}


