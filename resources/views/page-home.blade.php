<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apartment</title><!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Raleway', sans-serif;
        }

        .btn-outline {
            border: 1.5px solid #000;
            background-color: #4b4a39;
            color: #fff;
            opacity: 0.7;
            border-radius: 20px;
        }

        .btn-outline:hover {
            border: 1.5px solid #ce463d;
            background-color: #fff;
            color: #000;
            opacity: 1;
        }

        .page-header {
            margin: 0;
            border-bottom: none;
        }

        .text-muted {
            font-size: 3rem
        }

        .img-rounded {
            max-width: 230px;
        }

        .pagination {
            margin-left: 34%;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="page-header">
            <div>
                <img src="http://www.bamboocap.com.vn/sites/default/files/images/_icon6.png" alt="apartment-logo"
                     style="max-width: 100px">
                <span class="text-muted">Sweet Home</span>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Best Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Category <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Number one</a></li>
                        <li><a href="#">Number two</a></li>
                        <li><a href="#">Number three</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Vip</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Normal</a></li>
                    </ul>
                </li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="button" class="btn btn-outline">Search</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            @foreach($apartments as $item)
                <div class="col-md-3" style="margin: 20px;">
                    <img src="{{$item->images}}" alt="IMG-PRODUCT" class="img-rounded">
                    <a href="#">
                        <div style="margin-top: 5px;">
                            {{$item->name}}
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="row">
                <div class="col-lg-12">
                    {{$apartments->links()}}
                </div>
            </div>
        </div>
        <div class="col-md-3" style="margin-top: 20px;">
            <div class="panel panel-info">
                <div class="panel-heading">Search by ares</div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="#">Ha Noi</a></li>
                        <li role="presentation"><a href="#">Tp.Ho Chi Minh</a></li>
                        <li role="presentation"><a href="#">Nha Trang</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel panel-warning">
                <div class="panel-heading">Search by price</div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation"><a href="#">< 10.000$</a></li>
                        <li role="presentation"><a href="#">10.000$ - 20.000$</a></li>
                        <li role="presentation"><a href="#">20.000$ - 40.000$</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
