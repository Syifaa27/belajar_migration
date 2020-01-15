<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku_model::insert([
        [
        'judul'=>'Dilan 1990',
        'penerbit'=>'Gramedia',
        'pengarang'=>'Pidi Baiq',
        'foto'=>'-'

    ],
[
        'judul'=>'Milea',
        'penerbit'=>'Gramedia',
        'pengarang'=>'Pidi Baiq',
        'foto'=>'-'
],
[
        'judul'=>'Dilan 1991',
        'penerbit'=>'Gramedia',
        'pengarang'=>'Pidi Baiq',
        'foto'=>'-'
],
[
        'judul'=>'Masih Belajar',
        'penerbit'=>'Gramedia',
        'pengarang'=>'Iman Usman',
        'foto'=>'-'
],
[
        'judul'=>'Mantappu Jiwa',
        'penerbit'=>'Gramedia',
        'pengarang'=>'Jerome Polin',
        'foto'=>'-'
]

]);
}
}