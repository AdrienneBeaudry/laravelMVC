<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../../public/css/mystyle.css">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>


</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
        <br>
        <br>

        <br>

        <div id="inside-cart">
        </div>
        <br>

        <div>
            <button id="show-cart" type="button">Show Cart</button>
        </div>
    </div>
</div>


<script>

    /*
     function cartContents() {
     var cart = "http://localhost:8000/cart/get";

     function getCart(){
     var target = document.getElementById("main");
     var xhr = new XMLHttpRequest();
     xhr.open('GET', cart, true);
     xhr.onreadystatechange = function () {
     console.log('readyState: ' + xhr.readyState);
     if(xhr.readyState < 4) {
     showLoading();
     }
     if(xhr.readyState == 4 && xhr.status == 200) {
     outputCart(xhr.responseText);
     }
     };
     xhr.send();

     }

     function showLoading() {
     var target = document.getElementById('main');
     target.innerHTML = "Loading...";
     }
     function outputCart(data) {
     var target = document.getElementById('main');
     var json = JSON.parse(data);
     console.log(json);
     var firstItem = json.totalItems.name;
     target.innerHTML = firstItem;

     }

     }

     var button = document.getElementById("show-cart");
     button.addEventListener("click", cartContents());
     */




    var latestRequest;

    function cache(fn1, fn2, oldData, wait) {
        var time = Date.now();
        return function() {
            if ((time + wait - Date.now()) < 0) {
                fn1();
                time = Date.now();
            }
            else {
                fn2(oldData);
            }
        }
    }

    function fetchCart(latestRequest) {
        var url = "http://localhost:8000/cart/get";
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);

        xhr.onreadystatechange = function () {
            if(xhr.readyState < 4) {
                showLoading();
            }
            if(xhr.readyState == 4 && xhr.status == 200) {
                latestRequest = xhr.responseText;
                outputCart(latestRequest);
            }
        }
        xhr.send();
    }

    function showLoading() {
        var target = document.getElementById('inside-cart');
        target.innerHTML = 'Loading...';
    }

    function outputCart(data) {
        var target = document.getElementById('inside-cart');
        var parsedData = JSON.parse(data);
        console.log(parsedData);
        var totalItemsCart = parsedData.totalItems;
        var totalPrice = parsedData.totalPrice;
        target.innerHTML = 'Total items: '+ totalItemsCart + ', ' + 'Order total: ' + totalPrice;
    }

    var button = document.getElementById ("show-cart");
    console.log(latestRequest);
    button.addEventListener("click", cache(fetchCart, outputCart, latestRequest, 5000));


</script>
</body>
</html>
