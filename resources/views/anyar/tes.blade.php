<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    {{--<div class="col-md-2 col-md-offset-1">--}}
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">--}}
                {{--<div class="panel-title" style="text-align: center">Panel</div>--}}
            {{--</div>--}}
            {{--<ul class="nav nav-pills nav-stacked">--}}
                {{--<li><a href="/">Data Master</a></li>--}}
                {{--<li><a href="/">Data Barang</a></li>--}}
                {{--<li><a href="/">Transaksi</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>