<div class="boursa-sidebar">
    <nav class="nav navbar-light navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#vert-navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse flex-column mt-md-0 mt-4 pt-md-0 pt-4" id="vert-navbar">
            <a href="{{ route("showStockIncomeStatement", ['id'=> $stock->id]) }}" class="nav-link {{ Route::is('showStockIncomeStatement') ? 'active-menu' : '' }}" >
                Financial Data
            </a>
            <a href="{{ route("showStockBalance", ['id'=> $stock->id]) }}" class="nav-link {{ Route::is('showStockBalance') ? 'active-menu' : '' }}">
                Financial Statement
            </a>
            <a href="" class="nav-link disabled">
                Corporate Profit
            </a>
            <a href="{{ route("showStockDisclosure", ['id'=> $stock->id]) }}" class="nav-link {{ Route::is('showStockDisclosure') ? 'active-menu' : '' }}">
                Disclosure
            </a>
        </div>
    </nav>
</div>
