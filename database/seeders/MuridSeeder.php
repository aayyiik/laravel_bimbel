<?php

namespace Database\Seeders;

use App\Models\Murid;
use Illuminate\Database\Seeder;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $murid = [
            [
                "nama"=> "Morna Proby",
                "gender"=> "M",
                "tgl_lahir"=> "2013-02-04",
                "kota_lahir"=> "Banī an Nahārī",
                "nama_ortu"=> "Micah Parrett"
              ], 
              [
                "nama"=> "Kyrstin Vickars",
                "gender"=> "M",
                "tgl_lahir"=> "2015-11-22",
                "kota_lahir"=> "Sindon",
                "nama_ortu"=> "Marika Jarvie"
              ], 
              [
                "nama"=> "Dido Kuhlen",
                "gender"=> "M",
                "tgl_lahir"=> "2008-04-07",
                "kota_lahir"=> "Shchëkino",
                "nama_ortu"=> "Ewart Lutman"
              ], 
              [
                "nama"=> "Anica Folomin",
                "gender"=> "F",
                "tgl_lahir"=> "2014-09-23",
                "kota_lahir"=> "Brvenica",
                "nama_ortu"=> "Todd Mallatratt"
              ], 
              [
                "nama"=> "Iris Beckhouse",
                "gender"=> "F",
                "tgl_lahir"=> "2003-10-04",
                "kota_lahir"=> "Boncis",
                "nama_ortu"=> "Hersch Didsbury"
              ], 
              [
                "nama"=> "Derek Jedrzejewsky",
                "gender"=> "M",
                "tgl_lahir"=> "2005-02-13",
                "kota_lahir"=> "Mariel",
                "nama_ortu"=> "Isadora Gurdon"
              ], 
              [
                "nama"=> "Locke Chappelle",
                "gender"=> "M",
                "tgl_lahir"=> "2001-07-20",
                "kota_lahir"=> "Roissy Charles-de-Gaulle",
                "nama_ortu"=> "Husein Gheorghescu"
              ], 
              [
                "nama"=> "Iggie Tomik",
                "gender"=> "F",
                "tgl_lahir"=> "2008-02-23",
                "kota_lahir"=> "Nekla",
                "nama_ortu"=> "Brocky Lukacs"
              ], 
              [
                "nama"=> "Karoly Hendrik",
                "gender"=> "M",
                "tgl_lahir"=> "2003-06-28",
                "kota_lahir"=> "Sara Kunda",
                "nama_ortu"=> "Pansy Hudson"
              ], 
              [
                "nama"=> "Cello Fleury",
                "gender"=> "F",
                "tgl_lahir"=> "2014-03-17",
                "kota_lahir"=> "Neftegorsk",
                "nama_ortu"=> "Frederick Murdy"
              ], 
              [
                "nama"=> "Nat Tandey",
                "gender"=> "M",
                "tgl_lahir"=> "2014-12-24",
                "kota_lahir"=> "Bolo",
                "nama_ortu"=> "Zorah Hyndson"
              ], 
              [
                "nama"=> "Zenia Dellar",
                "gender"=> "M",
                "tgl_lahir"=> "2003-05-16",
                "kota_lahir"=> "Corozal",
                "nama_ortu"=> "Erroll Willatt"
              ], 
              [
                "nama"=> "Gian Gerrett",
                "gender"=> "F",
                "tgl_lahir"=> "2006-10-25",
                "kota_lahir"=> "Slobodka",
                "nama_ortu"=> "Wandis Crocroft"
              ], 
              [
                "nama"=> "Aileen Iredale",
                "gender"=> "F",
                "tgl_lahir"=> "2008-10-31",
                "kota_lahir"=> "Ganjur",
                "nama_ortu"=> "Bren Hein"
              ], 
              [
                "nama"=> "Ali Stoffels",
                "gender"=> "M",
                "tgl_lahir"=> "2006-11-08",
                "kota_lahir"=> "São Luís do Quitunde",
                "nama_ortu"=> "Pearl McOnie"
              ], 
              [
                "nama"=> "Wolfgang Lowseley",
                "gender"=> "F",
                "tgl_lahir"=> "2007-12-15",
                "kota_lahir"=> "Budzów",
                "nama_ortu"=> "Sophey Aspland"
              ], 
              [
                "nama"=> "Sebastiano Cobbin",
                "gender"=> "F",
                "tgl_lahir"=> "2002-06-29",
                "kota_lahir"=> "Amarete",
                "nama_ortu"=> "Frasier Glenfield"
              ], 
              [
                "nama"=> "Gilly Mattacks",
                "gender"=> "F",
                "tgl_lahir"=> "2013-12-02",
                "kota_lahir"=> "Togitsu",
                "nama_ortu"=> "Lorraine Stott"
              ], 
              [
                "nama"=> "Gustavus Brain",
                "gender"=> "M",
                "tgl_lahir"=> "2003-03-23",
                "kota_lahir"=> "Pasarkolot",
                "nama_ortu"=> "Cleon Winfindale"
              ], 
              [
                "nama"=> "Tresa Brasher",
                "gender"=> "M",
                "tgl_lahir"=> "2006-06-30",
                "kota_lahir"=> "Charras",
                "nama_ortu"=> "Ariella Saphir"
              ],
        ];

        foreach($murid as $key => $value){
            Murid::created($value);
        }
    }
}
