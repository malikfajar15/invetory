@extends('master')
@section('isi')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">Data Transaksi</div>
        </div>
        <div class="panel-body">
            <a href="{{ route('inventory.create') }}"><button class="btn btn-primary">Create New Data</button></a>
            <br><br>
            <table class="table table-hover">
                <tr>
                    {{--<th>No.</th>--}}
                    <th>No.Transaksi</th>
                    <th>No.Barang</th>
                    <th>Nama Barang</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th colspan="3">Action</th>
                </tr>
                @foreach($transaksi as $item)
                    <tr>
                        <td>{{$item->id_transaksi}}</td>
                        <td>{{$item->id_barang}}</td>
                        <td>{{$item->barang->nama_barang}}</td>
                        {{--<td>{{$item->status}}</td>--}}
                        {{--<td>{{$item->created_at->toFormattedDateString()}}</td>--}}
                        {{--<td><a href="{{route('inventory.show', $item->id_transaksi)}}" class="btn btn-primary">Show</a>--}}
                        {{--</td>--}}
                        {{--<td><a href="{{route('inventory.edit', $item->id_transaksi)}}" class="btn btn-warning">Edit</a>--}}
                        {{--</td>--}}
                        <td>
                            <form method="POST" action="{{route('inventory.delete', $item->id_transaksi)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <Button class="btn btn-danger">Delete</Button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection