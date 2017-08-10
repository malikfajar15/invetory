<?php

use Illuminate\Database\Seeder;

class testseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Barang::insert([
            'id_barang' => 1,
            'nama_barang' => 'HardDisk',
            'stok' => 10,
        ]);
    }
}
