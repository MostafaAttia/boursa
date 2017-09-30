<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{ $stock->name }}</title>

    @include('Stock.Partials.HeaderStyles')

</head>
<body>

    <div class="mt-5">
        <div class="row">
            <div class="col-4 col-sm-2 col-xs-1">
                @yield('sidebar')
            </div>
            <div class="col-8 col-sm-10 col-xs-11">
                @yield('content')
            </div>
        </div>
    </div>

    @include('Stock.Partials.FooterScripts')

</body>
</html>
