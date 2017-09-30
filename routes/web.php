<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'as'   => 'showStocks',
    'uses' => 'StockController@index',
]);

Route::get('/stock/{stock_id}/',[
    'as'   => 'showStockIncomeStatement',
    'uses' => 'StockController@showStockIncomeStatement',
]);

Route::get('/stock/{stock_id}/pdf',[
    'as'   => 'getIncomeStatementAsPDF',
    'uses' => 'StockController@getIncomeStatementAsPDF',
]);

Route::get('/stock/balance/{stock_id}/',[
    'as'   => 'showStockBalance',
    'uses' => 'StockController@showStockBalance',
]);

Route::get('/stock/disclosure/{stock_id}/',[
    'as'   => 'showStockDisclosure',
    'uses' => 'StockController@showStockDisclosure',
]);




