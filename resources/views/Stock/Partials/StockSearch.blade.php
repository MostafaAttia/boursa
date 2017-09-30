<div id="app">
    <ais-index app-id="{{ config('scout.algolia.id') }}"
               api-key="{{ env('ALGOLIA_SEARCH') }}"
               index-name="stocks">

        <div class="row stock-search">
            <div class="col-9 col-md-6 col-lg-6 offset-3 text-center">
                <ais-search-box>
                    <div class="input-group">
                        <ais-input id="stocks-searchbox" placeholder="Search Stocks by Name or Ticker..." :class-names="{'ais-input': 'form-control'}"></ais-input>

                        <span class="input-group-btn">
                            <ais-clear :class-names="{'ais-clear': 'btn btn-default'}">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </ais-clear>
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div>
                </ais-search-box>

                <ais-results>
                    <template scope="{ result }">
                        <div class="instant-results">
                            <ul class="list-unstyled result-bucket">
                                <li class="result-entry" data-suggestion="Target 1" data-position="1" data-type="type" data-analytics-type="merchant">
                                    <a :href="result.id" class="result-link">
                                        <div class="media">
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a :href="result.id">
                                                        @{{ result.name }}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </template>
                </ais-results>
            </div>
        </div>
    </ais-index>
</div>
