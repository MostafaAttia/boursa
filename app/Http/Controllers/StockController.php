<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use PDF;

class StockController extends Controller
{

    /**
     *  get next and previous of current stock in stocks array after ordering by name
     *
     * @param $stock_id
     * @return array
     */
    private static function createStockPagination($stock_id)
    {
        // create a simple pagination between stocks, in alphabetical order
        $stocksPaginated = Stock::orderBy('name', 'asc')->get(); // get stocks ordered alphabetically by name
        $currentStock = $stocksPaginated->where('id', $stock_id);
        $stocksPaginatedArray = $stocksPaginated->toArray();
        $first = array_first($stocksPaginatedArray)['id']; //first element in stocks
        $last = array_last($stocksPaginatedArray)['id']; // last element in stocks

        $prevStockID = isset($stocksPaginatedArray[key($currentStock->toArray()) - 1])
            ? $stocksPaginatedArray[key($currentStock->toArray()) - 1]['id']
            : $last;

        $nextStockID = isset($stocksPaginatedArray[key($currentStock->toArray()) + 1])
            ? $stocksPaginatedArray[key($currentStock->toArray()) + 1]['id']
            : $first;

        return compact('nextStockID', 'prevStockID');
    }


    /**
     *  Show stock by id
     *
     * @param $stock_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showStockIncomeStatement($stock_id)
    {

        $pagination = $this::createStockPagination($stock_id);
        $prevStockID = $pagination['prevStockID'];
        $nextStockID = $pagination['nextStockID'];

        // prepare stocks & incomeStatement for views
        $stock = Stock::find($stock_id);

        if($stock){ // if stock was found

            $stockIncome = $stock->income()->get()->toArray();
            $interest_income = [];

            foreach ($stockIncome as $income) { // re-arrange interest_income for table view
                foreach ($income as $key => $value) {
                    $interest_income[$key][] = $value;
                }
            }

            return view('Stock.Partials.IncomeStatement', compact('stock', 'interest_income', 'prevStockID', 'nextStockID' ));
        }

        return view('Errors.StockNotFound');

    }

    /**
     * Convert Income_Statement HTML table to pdf
     *
     * @param $stock_id
     * @return
     */
    public function getIncomeStatementAsPDF($stock_id)
    {
        $stock = Stock::find($stock_id);
        $stockIncome = $stock->income()->get()->toArray();
        $interest_income = [];

        $title = str_replace([' ', '-'], '_', $stock->name).'_interest_income.pdf';
        $stock_name = $stock->name;

        foreach ($stockIncome as $income) { // re-arrange interest_income for table view
            foreach ($income as $key => $value) {
                $interest_income[$key][] = $value;
            }
        }

        $pdf = PDF::loadView('Stock.Partials.IncomeStatementAsPDF', compact('interest_income', 'title', 'stock_name'));
        return $pdf->stream($title);
    }

    /**
     * Show Stock Balance
     *
     * @param $stock_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showStockBalance($stock_id)
    {
        $pagination = $this::createStockPagination($stock_id);
        $prevStockID = $pagination['prevStockID'];
        $nextStockID = $pagination['nextStockID'];

        $stock = Stock::find($stock_id);

        if($stock){
            $stock_balance = $stock->balance()->get()->toArray();
            return view('Stock.Partials.BalanceSheet', compact('stock', 'stock_balance', 'prevStockID', 'nextStockID' ));
        }

        return view('Errors.StockNotFound');

    }


    /**
     * Show Stock Disclosure
     *
     * @param $stock_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showStockDisclosure($stock_id)
    {
        $pagination = $this::createStockPagination($stock_id);
        $prevStockID = $pagination['prevStockID'];
        $nextStockID = $pagination['nextStockID'];

        $stock = Stock::find($stock_id);

        if($stock){
            $stock_disclosure = $stock->disclosure()->get()->toArray();
            return view('Stock.Partials.StockDisclosure', compact('stock', 'stock_disclosure', 'prevStockID', 'nextStockID' ));
        }

        return view('Errors.StockNotFound');

    }


    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $stocks = Stock::orderBy('name', 'asc')->get();
        return view('Stock.Home', compact('stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
