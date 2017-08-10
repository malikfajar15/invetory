@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        {{--<div class="col-md-12 col-md-offset-3">--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="Dashboard">Home</a></li>--}}
                {{--<li><a href="#">Library</a></li>--}}
                {{--<li class="#">Data</li>--}}
            {{--</ol>--}}
        {{--</div>--}}
        <div class="col-md-2 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title" style="text-align: center">Panel</div>
                </div>
                <div class="dropdown col-md-offset-2" style="background-color: #4CAF50">
                    <button class="dropbtn">Data Master</button>
                    <div class="dropdown-content">
                        <a href="">Data Barang</a>
                        <a href="{{ route('inventory.index') }}">Data Transaksi</a>
                    </div>
                </div>
                {{--<ul class="nav nav-pills nav-stacked">--}}
                    {{--<li><a href="/">Data Master</a></li>--}}
                    {{--<li><a href="/">Data Barang</a></li>--}}
                    {{--<li><a href="{{route('inventory.index')}}">Transaksi</a></li>--}}
                {{--</ul>--}}
            </div>
        </div>

        {{--<div class="col-md-pull-"></div>--}}
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    @yield('isi')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection