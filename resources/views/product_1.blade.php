<!doctype html>

<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <title>Product</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            .galery-container{
                display: flex;
                justify-content: center;
            }

            .galery-container img{
                width: 80px;
                margin: 20px 20px 0 0;
            }

            body{
                background-color: #f8f4f1;
            }

            .kiri {
                display: flex;
                justify-content: flex-end;
            }

            #notification{
                width: 100%;
                position: relative;
            }

            #notification h1 {
                font-size: 12px;
                background-color: #fdfcee;
                padding: 15px 0;
            }

            header{
                background-color: #f8f4f1;
            }

            header .header__link a{
                text-transform: uppercase;
                text-decoration: none;
                color: #1c1b1b;
                font-size: 12px;
            }

            .product__description h1{
                font-size: 18px;
                text-transform: uppercase;
                font-weight: 400;
                color: #1c1b1b;
            }

            .product__description h2{
                font-size: 16px;
                text-transform: uppercase;
                font-weight: 400;
                color: #1c1b1b;
            }

            .product__description h3{
                font-size: 16px;
                text-transform: uppercase;
                font-weight: 400;
                color: #6a6a6a;
            }

            .product__size-chart{
                position: relative;
            }

            .product__size-chart p{
                position: absolute;
                right: 50px;
                color: #6a6a6a;
                border-bottom: 1px solid #6a6a6a;
            }

            .product__size{
                font-size: 14px;
                padding: 10px 0;
                margin-bottom: 30px;
            }

            .product__size--table h1{
                font-size: 14px;
                font-weight: 400;
                display: inline;
                margin-right: 16px;
                padding: 10px 12px;
                border: 1px solid #6a6a6a;
                color: #6a6a6a;
            }

            .product__button button{
                width: 93%;
                font-size: 14px;
                border: 1px solid #d1d1d1;
                margin-bottom: 20px;
                padding: 10px 0;
                background-color: transparent;
                color: #1c1b1b;
            }

            .product__button i{
                color: red;
                font-size: 16px;
            }

            .product__button .product__button--primary{
                border: 1px solid #cda398;
                position: relative;
                transition: all .35s;
                background-color: #cda398;
            }

            .product__button .product__button--primary span{
                position: relative;
                z-index: 2;
            }

            .product__button .product__button--primary:after{
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                width: 0;
                height: 100%;
                background: #f8f4f1;
                transition: all .35s;
            }

            .product__button .product__button--primary:hover:after{
                width: 100%;
            }

        </style>

    </head>

    <body>

        <section id="notification" class="text-center px-3">
            <h1 class="display-6 text-uppercase">
                Free shipping for orders over IDR 1.000.000
            </h1>
        </section>

        <header class="container-fluid sticky-top">
            <div class="row">
                <div class="col-6 kiri">
                    <img src="/images/logopng.png" width="75px" alt="" />
                </div>
                <div class="col-6 kanan d-flex align-items-center justify-content-end header__link">
                    <a href="#" class="me-4" style="color: #6a6a6a; font-size: 11px;">Account</a>
                    <a href="#" class="me-4" style="color: #6a6a6a; font-size: 11px;">Search</a>
                    <a href="#" class="me-4">Cart</a>
                    <a href="#" class="me-5">IDR</a>
                </div>
            </div>

                <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid row">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">At Dawn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">Encore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">Cherry</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="./images/1607185632.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="./images/1607185722.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="./images/1607185764.jpg" class="d-block w-100" alt="...">
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="galery-container">
                        <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                            <img src="./images/1607185632.jpg" alt="">
                        </div>
                        <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                            <img src="./images/1607185722.jpg" alt="">
                        </div>
                        <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                            <img src="./images/1607185764.jpg" alt="">
                        </div>
                    </div>
                </div>

                <section class="product__description col-md-5 offset-md-1 col-sm-12">
                    <h1 class="py-2">Hana heels</h1>
                    <h2 class="py-2">Coklat tua magetan</h2>
                    <h3 class="py-2">RP 450.000</h3>
                    <h2 class="py-2">2 OTHER AVAILABLE OPTIONS</h2>

                    <img src="/images/1607185632.jpg" class="img-thumbnail mb-3" width="64px" alt="...">
                    <img src="/images/1607185722.jpg" class="img-thumbnail mb-3" width="64px" alt="...">

                    <div class="row product__size">
                        <div class="col-6">
                            <p>Size: </p>
                        </div>
                        <div class="col-6 product__size-chart">
                            <a href="#"><p>Size chart</p></a>
                        </div>

                        <div class="product__size--table">
                            <h1>36</h1>
                            <h1>37</h1>
                            <h1>38</h1>
                            <h1>39</h1>
                            <h1>40</h1>
                        </div>
                    </div>


                    <div class="product__button">
                        <button type="button" class="product__button--primary"> <span> ADD TO CART </span> </button>
                        <button type="button"> <i class="bi bi-suit-heart me-2"></i>Add To Wishlist </button>
                    </div>

                    <h1 class="display-6 fs-5 pb-3">Hana heels</h1>

                    <h1 class="display-6 fs-5 pb-5">Colour : Coklat tua magetan</h1>

                    <h1 class="display-6 fs-5 pb-3">Heel Height : 7cm dengan silver ( by request )</h1>

                    <h1 class="display-6 fs-5 pb-3">with 1 year warranty</h1>

                    <h1 class="display-6 fs-5 pb-3">Size Chart</h1>

                    <table class="table mb-5">
                        <tbody>
                            <tr>
                            <td>36</td>
                            <td>23cm</td>
                            </tr>
                            <tr>
                            <td>37</td>
                            <td>23.5cm</td>
                            </tr>
                            <tr>
                            <td>38</td>
                            <td>24cm</td>
                            </tr>
                            <tr>
                            <td>39</td>
                            <td>24.5cm</td>
                            </tr>
                            <tr>
                            <td>40</td>
                            <td>25cm</td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center align-content-around flex-wrap">
                    <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/003-credit-card.svg?v=1599466438" width="75px" alt="" srcset="">
                    <h1 class="d-inline-block display-6 fs-6 me-4 p-4">
                        EASY & SECURE PAYMENT
                    </h1> 
                    <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/005-free-delivery.svg?v=1599466438" width="75px" alt="" srcset="">
                    <h1 class="d-inline-block display-6 fs-6 me-4 p-4">
                        FREE SHIPPING ON ORDERS ABOVE 1JT
                    </h1>
                    <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/006-exchange.svg?v=1599466439" width="75px" alt="" srcset="">
                    <h1 class="d-inline-block display-6 fs-6 me-4 p-4">
                        7 DAYS EXCHANGE
                    </h1>
                    <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/007-satisfaction.svg?v=1599466438" width="75px" alt="" srcset="">
                    <h1 class="d-inline-block display-6 fs-6 me-4 p-4">
                        PROUDLY MADE IN INDONESIA
                    </h1>
                </div>
            </div>     
        </div>

        <div class="container">        
            <div class="row">
                <h1 class="d-inline-block display-6 fs-6 text-center me-4 p-4">
                    YOU MAY ALSO LIKE
                </h1>
            </div>

            <div class="row">
                <h1 class="d-inline-block display-6 fs-6 text-center me-4 p-4">
                    RECENTLY VIEWED
                </h1>
            </div>

            <div class="d-inline-block">
                <ul class="list-unstyled d-inline-block me-3 p-3">
                    <li>Shop All</li>
                    <li>New Arrivals</li>
                    <li>Best Sellers</li>
                    <li>Sale</li>
                </ul>

                <ul class="list-unstyled d-inline-block me-3 p-3">
                    <li>How to Order</li>
                    <li>Shipping</li>
                    <li>Return & Exchanges</li>
                    <li>Payment Confirmation</li>
                    <li>Terms of Service</li>
                </ul>

                <ul class="list-unstyled d-inline-block me-3 p-3">
                    <li>FAQ</li>
                    <li>Size Guide</li>
                    <li>About Us</li>
                    <li>About Us</li>
                </ul>

                <ul class="list-unstyled d-inline-block me-3 p-3">
                    <li>Follow Us</li>
                </ul>

                <ul class="list-unstyled d-inline-block me-3 p-3">
                    <li>Join our newsletter to get the latest news</li>
                    <li>Enter your email address</li>
                    <li>SUBSCRIBE</li>
                </ul>
            </div>

            <div class="d-inline-block">                    
                <div class="d-inline-block me-4 p-4">
                    © Gloeshoes.leather
                </div>
                
                <div class="d-inline-block me-4 p-4">
                    Nama Bank
                </div>
            </div>
        </div> 


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
    </body>

</html>