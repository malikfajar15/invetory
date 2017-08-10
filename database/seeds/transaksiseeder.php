<?php

use Illuminate\Database\Seeder;

class transaksiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksi')>insert(
            array(
                array('status' => 'Masuk'),
                array('status' => 'Keluar'),
            ));
    }
}
