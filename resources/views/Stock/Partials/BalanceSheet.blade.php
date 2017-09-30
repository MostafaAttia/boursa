@extends('Stock.Master')

@section('sidebar')
    @include('Stock.Partials.Sidebar')
@stop

@section('content')

    @include('Stock.Partials.StockNavHeader')

    @include('Stock.Partials.StockSearch')

    <h5> Balance Sheet (Full)</h5>

    <table class="table table-hover">
        <thead class="thead-inverse">
        <tr>
            <th>1st Quarter</th>
            <th>Half Yearly</th>
            <th>3rd Quarter</th>
            <th>Yearly</th>
        </tr>
        </thead>
        <tbody>
        <!--
        uploaded files should be stored in file-system,
        while keeping a reference to it (usually it's name) in database
        -->
        @foreach($stock_balance as $balance)
            <tr>
                @foreach($balance as $value)
                    <td>
                        <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
                        <a href="{{ URL::to( '/pdf/balance.pdf')  }}" target="_blank">6/9/2014</a>
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

@stop