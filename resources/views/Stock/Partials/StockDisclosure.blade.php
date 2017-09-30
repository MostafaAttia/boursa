@extends('Stock.Master')

@section('sidebar')
    @include('Stock.Partials.Sidebar')
@stop

@section('content')

    @include('Stock.Partials.StockNavHeader')

    @include('Stock.Partials.StockSearch')

    <div class="row">
        <div class="col-12">
            <h5> Balance Sheet (Full)</h5>

            <table class="table table-striped">
                <thead class="thead-inverse">
                <tr>
                    <!--
                    also table headers could be filled automatically from table's column names
                    -->
                    <th>Name</th>
                    <th>Relation</th>
                    <th>Company Working In</th>
                    <th>Title</th>
                    <th>Security To Buy/Sell</th>
                    <th>Security Name</th>
                    <th>Relationship With Company</th>
                    <th>Transaction Type</th>
                    <th>Quantity</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($stock_disclosure as $disclosure)
                    <tr>
                        @foreach($disclosure as $value)
                            <td>{{ $value }}</td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop