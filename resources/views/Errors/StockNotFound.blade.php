<html>
<head>
    <meta charset="UTF-8">
    <title>404 Not Found</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5  mx-auto">
        <div class="row">
            <div class="col-6 offset-3">
                <a href="{{ route("showStocks") }}">
                    <h2>Show All Stocks</h2>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-6 offset-3">
                <h4>Sorry, Stock Not Found</h4>
            </div>
        </div>
    </div>
</body>
</html>