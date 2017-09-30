<div class="header-panel mt-3 mb-3 p-4">
    <div class="row">
        <div class="col-6">
            <h6>Annual Income Statement (Values in Millions)</h6>
            <h6>Currency: Kuwaiti Dinars</h6>
        </div>
        <div class="col-6">
            <div class="pull-right">
                <h6>Published on: {{ $stock->created_at->format('d-m-Y') }}</h6>
                <div class="income-as-pdf">

                    <h6>
                        <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
                        <a href="{{ route("getIncomeStatementAsPDF", ['id'=> $stock->id]) }}">Download as PDF</a>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table table-hover interest_table">
    <thead class="thead-inverse">
    <tr>
        <!--
        Table headers should be dynamically shown as $interest_income['year'] in real app,
        BUT the (database-seeding) didn't make it to be ordered by year like this
        -->
        <th></th>
        <th>2014</th>
        <th>2015</th>
        <th>2016</th>
        <th>2017</th>
    </tr>
    </thead>
    <tbody>
    @foreach($interest_income as $key=>$income)
        <tr>
            <th scope="row">{{ ucwords(str_replace('_', ' ', $key)) }}</th>
            @foreach($income as $value)
                <td>{{ $value }}</td>
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>