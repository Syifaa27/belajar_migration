<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas_model::insert([
        [
        'nama_petugas'=>'Niansa',
        'alamat'=>'Malang',
        'tlp'=>'098765432112',
        'username'=>'Nianso',
        'password'=>'123456'
    ],
[
        'nama_petugas'=>'Nisrina',
        'alamat'=>'Jakarta',
        'tlp'=>'097258726457',
        'username'=>'Ninis',
        'password'=>'098765'
],
[
        'nama_petugas'=>'Serli',
        'alamat'=>'Bojonegoro',
        'tlp'=>'047598467267',
        'username'=>'serli',
        'password'=>'675675'
],
[
        'nama_petugas'=>'Fara',
        'alamat'=>'Tuban',
        'tlp'=>'097245924678',
        'username'=>'faraa',
        'password'=>'496583'
],
[
        'nama_petugas'=>'Angelin',
        'alamat'=>'Malang',
        'tlp'=>'0937587498394',
        'username'=>'angel',
        'password'=>'864572'
]

]);
}
}