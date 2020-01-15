<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota_model::insert([
            [
            'nama_anggota'=>'Dilan',
            'alamat'=>'jalan sendirian gang bersamaan',
            'tlp'=>'098765432112'
        ],
    [
        'nama_anggota'=>'Milea',
        'alamat'=>'jalan putusin saja',
        'tlp'=>'083456789012'
    ],
    [
        'nama_anggota'=>'Iqbaal',
        'alamat'=>'Jakarta ',
        'tlp'=>'00923739264'
    ],
    [
        'nama_anggota'=>'Aldi',
        'alamat'=>'Palembang',
        'tlp'=>'092734188764'
    ],
    [
        'nama_anggota'=>'Syifa',
        'alamat'=>'Malang',
        'tlp'=>'0891746714065'
    ]

    ]);
    }
}
