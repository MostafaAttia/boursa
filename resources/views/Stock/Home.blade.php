@extends('Stock.Master')

@section('content')
    <div>
        <table class="table table-hover">
            <thead class="thead-inverse">
            <tr>
                <th>Stock #</th>
                <th>Stock Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{ $stock->number }}</td>
                    <td>
                        <a href="{{ route("showStockIncomeStatement", ['id'=> $stock->id]) }}">{{ $stock->name }}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@stop