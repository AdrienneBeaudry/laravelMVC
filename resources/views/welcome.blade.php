<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vaimo Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">


</head>
<body>

<!-- GENERAL -->
<div id="top-border">
</div>

<!-- MOBILE -->
<!--nav-->

<!-- SCREEN -->
<!-- nav -->
<div class="container">
    <header>
        <div class="row">
            <div class="col l3 push-l9">
                <a href="#">
                    <button id="show-cart"></button>
                </a>

                <div id='inside-cart'>
                </div>
            </div>


            <div class="col l9 pull-l3">
                <a href="#"><img src="img/logo.png" alt=""></a></div>
        </div>
        <ul class="menu">
            <li><a href="#">WOMEN</a>
                <ul class="submenu">
                    <li><a href="#">Top Sellers</a></li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Outerwear</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Beauty</a></li>
                    <li><a href="#">Intimates</a></li>
                    <li><a href="#">Athletic Wear</a></li>
                </ul>
            </li>

            <li><a href="#">MEN</a>
                <ul class="submenu">
                    <li><a href="#">Top Sellers</a></li>
                    <li><a href="#">Suits</a></li>
                    <li><a href="#">Shirts</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Beach</a></li>
                    <li><a href="#">Athletic Wear</a></li>
                    <li><a href="#">Underwear</a></li>
                </ul>
            </li>
            <li><a href="#">JUNIOR</a>
                <ul class="submenu">
                    <li><a href="#">Kids' Favourites</a></li>
                    <li><a href="#">Tee-Shirts</a></li>
                    <li><a href="#">Summer</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Beach</a></li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Essentials</a>
                </ul>
            </li>
            <li><a href="#">ACCESSORIES</a></li>
            <li><a href="#">COLLECTIONS</a>
                <ul class="submenu">
                    <li><a href="#">2016<i class="material-icons right">play_arrow</i></a>
                        <ul id="tinymenu">
                            <li><a href="#">SUMMER</a></li>
                            <li><a href="#">AUTUMN</a></li>
                            <li><a href="#">WINTER</a></li>
                            <li><a href="#">SPRING</a></li>
                        </ul>
                    </li>
                    <li><a href="#">2015 <i class="material-icons right" aria-hidden="true">play_arrow</i></a>
                        <ul id="tinymenu">
                            <li><a href="#">SUMMER</a></li>
                            <li><a href="#">AUTUMN</a></li>
                            <li><a href="#">WINTER</a></li>
                            <li><a href="#">SPRING</a></li>
                        </ul>
                    </li>
                    <li><a href="#">2014 <i class="material-icons right">play_arrow</i></a>
                        <ul id="tinymenu">
                            <li><a href="#">SUMMER</a></li>
                            <li><a href="#">AUTUMN</a></li>
                            <li><a href="#">WINTER</a></li>
                            <li><a href="#">SPRING</a></li>
                        </ul>
                    </li>
                    <li><a href="#">2013 <i class="material-icons right">play_arrow</i></a>
                        <ul id="tinymenu">
                            <li><a href="#">SUMMER</a></li>
                            <li><a href="#">AUTUMN</a></li>
                            <li><a href="#">WINTER</a></li>
                            <li><a href="#">SPRING</a></li>
                        </ul>
                    </li>
                    <li><a href="#">2012 <i class="material-icons right">play_arrow</i></a>
                        <ul id="tinymenu">
                            <li><a href="#">SUMMER</a></li>
                            <li><a href="#">AUTUMN</a></li>
                            <li><a href="#">WINTER</a></li>
                            <li><a href="#">SPRING</a></li>
                        </ul>
                    </li>
                    <li><a href="#">2011 <i class="material-icons right">play_arrow</i></a>
                        <ul id="tinymenu">
                            <li><a href="#">SUMMER</a></li>
                            <li><a href="#">AUTUMN</a></li>
                            <li><a href="#">WINTER</a></li>
                            <li><a href="#">SPRING</a></li>
                        </ul>
                    </li>
                </ul>

            </li>
            <li><a href="#" id="red">SALE</a></li>

            </li>
            <li><a href="#">MY ACCOUNT</a></li>
        </ul>
    </header>


    <!--splash-->

    <div id="splash" class="row">

        <div class="col m6 l6" id="image-box">
            <img src="img/splash_image.png" alt="" class="img1">

        </div>
        <div class="col m6 l6" class="text-box">
            <img src="img/splash_text.png" alt="" class="get-ready">
        </div>

    </div>


    <!--divider-->

    <div class="box">
        <div class="row" id="divider">
            <div class="col l3 offset-l1" id="our-favourites">
                Our favourites
            </div>
        </div>
    </div>


    <!--products-->


</div>
<!--footer-->

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l3">
                <h5 class="white-text">TOP CATEGORIES</h5>
                <ul>
                    <li><a href="#" class="white-text">WOMEN</a></li>
                    <li><a href="#" class="white-text">MEN</a></li>
                    <li><a href="#" class="white-text">JUNIOR</a></li>
                    <li><a href="#" class="white-text">ACCESSORIES</a></li>
                </ul>
            </div>

            <div class="col l3">
                <h5 class="white-text">CUSTOMER SERVICE</h5>
                <ul>
                    <li><a href="#" class="white-text">RETURNS</a></li>
                    <li><a href="#" class="white-text">SHIPPING</a></li>
                    <li><a href="#" class="white-text">ABOUT US</a></li>
                    <li><a href="#" class="white-text">CONTACT US</a></li>
                </ul>
            </div>

            <div class="col l6">
                <h5 class="white-text">NEWSLETTER SUBSCRIBE</h5>
                <input type='text' placeholder='&#xf003; Enter your email address.'/>
                <button type="button" class="white-text" id="subscribe-btn">SUBSCRIBE</button>

            </div>
        </div>

    </div>

</footer>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<script>

    $(document).ready(function () {
        cache(fetchButton(), 5000);
    });

    function fetchButton() {
        var url = "http://localhost:8000/cart/get";
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                latestRequest = xhr.responseText;
                outputButton(latestRequest);
                outputCart(latestRequest);
            }
        }
        xhr.send();
    }


    function outputButton(data) {
        var target = document.getElementById('show-cart');
        var parsedData = JSON.parse(data);
        var totalItemsCart = parsedData.totalItems;
        var totalPrice = parsedData.totalPrice;

        target.innerHTML = "<i class='material-icons' id='cart-icon'>shopping_cart</i>" + totalItemsCart
            + " items in your cart <span id='bigger'>€" + totalPrice + "</span>";
    }


    function cache(fn1, wait) {
        var time = Date.now();
        return function () {
            if ((time + wait - Date.now()) < 0) {
                fn1();
                time = Date.now();
            }
        }
    }

    /* function cache(fn1, wait) {
     var counter = 0;
     var time = Date.now();
     return function () {
     if (counter = 0) {
     fn1();
     counter++;
     }
     else if ((time + wait - Date.now()) < 0) {
     fn1();
     time = Date.now();
     }
     }
     }
     */
    function outputCart(data) {
        var target = document.getElementById('inside-cart');
        var parsedData = JSON.parse(data);
        var product1Picture = parsedData.items[0].imgSrc;
        var product1Name = parsedData.items[0].name;
        var product1Qty = parsedData.items[0].qty;
        var product1Price = parsedData.items[0].price;
        var product2Picture = parsedData.items[1].imgSrc;
        var product2Name = parsedData.items[1].name;
        var product2Qty = parsedData.items[1].qty;
        var product2Price = parsedData.items[1].price;

        target.innerHTML = "<table><tr><td><img src='" + product1Picture + "' id='cart-pic'></td><td>" + product1Name
            + "<br>" + product1Qty + " x €" + product1Price + "</td><td><a href='#'>&#xf00d;</a></td></tr><tr><td><img src='" + product2Picture
            + "' id='cart-pic'></td><td>" + product2Name + "<br>" + product2Qty + " x €" + product2Price
            + "</td><td><a href='#'>&#xf00d;</a></td></tr><tr><td></td><th align='right' colspan='2'><a class='btn' href='' id='checkout'>GO TO CHECKOUT</a></th></tr></table>";
    }

    function hideCart() {
        document.getElementById('inside-cart').style.visibility = "hidden";
    }

    function showCart() {
        document.getElementById('inside-cart').style.visibility = "visible";
    }


    var button = document.getElementById("show-cart");
    button.addEventListener("mouseover", showCart);

    var button = document.getElementById("show-cart");
    button.addEventListener("mouseout", hideCart);

    function ValidateEmail(inputText) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (inputText.value.match(mailformat)) {
            document.form1.text1.focus();
            return true;
        }
        else {
            //do something
            document.form1.text1.focus();
            return false;
        }
    }


</script>

</body>
</html>
