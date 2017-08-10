<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['id_transaksi', 'id_barang', 'status'];


    public function barang(){
        return $this->belongsTo('App\Barang', 'id_barang');

    }
}
