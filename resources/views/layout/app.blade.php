<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>

    <title>@yield('title')</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="panel panel-danger">
              <div class="panel-heading">
              <h3 class="panel-title">BASIC TODO LIST <span class="badge pull-right">--LARAVEL</span></h3>
            </div>
            <div class="panel-body">
                @section('body')
                @show
            </div>
            <p class="alert alert-danger pull-right">-Created by Emmanuel Adegor</p>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
