<div class="row">
    <div class="col-3 text-center">
        @if(Route::is('showStockIncomeStatement'))
            <a href="{{ route("showStockIncomeStatement", ['id'=> $prevStockID]) }}">
                <i class="fa fa-chevron-left fa-4x" aria-hidden="true"></i>
            </a>
        @elseif(Route::is('showStockBalance'))
            <a href="{{ route("showStockBalance", ['id'=> $prevStockID]) }}">
                <i class="fa fa-chevron-left fa-4x" aria-hidden="true"></i>
            </a>
        @elseif(Route::is('showStockDisclosure'))
            <a href="{{ route("showStockDisclosure", ['id'=> $prevStockID]) }}">
                <i class="fa fa-chevron-left fa-4x" aria-hidden="true"></i>
            </a>
        @endif
    </div>
    <div class="col-6 text-center">
        <h2>{{ $stock->name }}</h2>
        <div>
            <span><strong>Ticker:</strong> {{ $stock->ticker }},</span>
            <span><strong>Stock Number:</strong> {{ $stock->number }}</span>
        </div>
        <a href="{{ $stock->websiteURL }}">{{ $stock->website }}</a>
    </div>
    <div class="col-3 text-center">
        @if(Route::is('showStockIncomeStatement'))
            <a href="{{ route("showStockIncomeStatement", ['id'=> $nextStockID]) }}">
                <i class="fa fa-chevron-right fa-4x" aria-hidden="true"></i>
            </a>
        @elseif(Route::is('showStockBalance'))
            <a href="{{ route("showStockBalance", ['id'=> $nextStockID]) }}">
                <i class="fa fa-chevron-right fa-4x" aria-hidden="true"></i>
            </a>
        @elseif(Route::is('showStockDisclosure'))
            <a href="{{ route("showStockDisclosure", ['id'=> $nextStockID]) }}">
                <i class="fa fa-chevron-right fa-4x" aria-hidden="true"></i>
            </a>
        @endif
    </div>
</div>