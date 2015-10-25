<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/index_scripts.js"></script>
    <title>Hitlist Submission Form</title>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <img src="/img/DART_sym_lt.svg" alt="DART Logo" id="logo" />
                </div>
                <div class="col-sm-9">
                    <h1 id="title">iTunes Featured Artist Form</h1>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="ajax">
            @yield('content')
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
