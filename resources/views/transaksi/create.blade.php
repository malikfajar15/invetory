@extends('master')

@section('isi')

    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Create Transaksi</div>
        </div>
        <div class="panel-body">
            <form class="form" method="POST" action="{{route('inventory.store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>No Transaksi</label>
                    <input type="text" name="id_transaksi" class="form-control" placeholder="No. Transaksi">
                </div>
                <div class="form-group">
                    <label>No Barang</label>
                    <input type="text" name="id_barang" class="form-control" placeholder="No. Barang">
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="masuk">Masuk</option>
                        <option value="keluar">Keluar</option>
                    </select>
                </div>
                <input type="hidden" name="id_transaksi" value="{{ auth()->user()->id_transaksi }}">
                <div class="form-group">
                    <button class="btn btn-primary ">Submit</button>
                </div>
            </form>
        </div>
    </div>


@endsection