@extends('Stock.Master')

@section('sidebar')
    @include('Stock.Partials.Sidebar')
@stop

@section('content')

    @include('Stock.Partials.StockNavHeader')

    @include('Stock.Partials.StockSearch')

    @include('Stock.Partials.IncomeStatementTable')

@stop