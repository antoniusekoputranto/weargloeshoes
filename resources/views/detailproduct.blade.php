@extends('layout.template')

@section('content')

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

            #notification {
                width: 100%;
                position: relative;
            }

            #notification h1 {
                font-size: 12px;
                background-color: #fdfcee;
                padding: 15px 0;
            }

            header#header{
                background-color: #f8f4f1;
                margin-top: -130px;
            }

            header#header .header__link a{
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

            .product__button button, footer button{
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

            .product__button .product__button--primary, footer button{
                border: 1px solid #cda398;
                position: relative;
                transition: all .35s;
                background-color: #cda398;
            }

            .product__button .product__button--primary span, footer button span{
                position: relative;
                z-index: 2;
            }

            .product__button .product__button--primary:after, footer button:after{
                position: absolute;
                content: "";
                top: 0;
                left: 0;
                width: 0;
                height: 100%;
                background: #f8f4f1;
                transition: all .35s;
            }

            .product__button .product__button--primary:hover:after, footer button:hover:after{
                width: 100%;
            }

            .product-information p{
                font-size: 16px;
                color: #1c1b1b;
                line-height: 23px;
            }

            .value-proposition{
                margin-top: 60px;
                background-color: #f1e9df;
            }

            .value-proposition h1{
                font-size: 14px;
                line-height: 21px;
                text-align: center;
                color: rgb(75, 74, 74);
            }

            .value-proposition .value-proposition__value{
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 20px 0;
            }

            .value-proposition .value-proposition__value--value2 h1{
                max-width: 90%;
            }

            .value-proposition .value-proposition__value img{
                display: block;
                margin: 0 auto;
                margin-bottom: 20px;
            }

            footer .grid-container{
                display: grid;
                grid-template-columns: 1fr 1.5fr 1fr 1fr 2fr 1fr;
            }

            footer{
                padding: 50px 0;
                margin-left: -70px;
            }

            footer input[type=text] {
                width: 100%;
                border: 1px solid rgb(197, 195, 195);
                padding: 8px 10px;
            }

            footer ::placeholder {
                color: rgb(75, 74, 74);
                font-size: 15px;
            }

            footer .grid-container .grid-item p{
                margin: 10px 0;
                font-size: 14px;
            }

            footer .grid-container .grid-item i{
                margin-right: 30px;
            }
        </style>
        {{-- <section id="notification" class="text-center px-3">
            <h1 class="display-6 text-uppercase">
                Free shipping for orders over IDR 1.000.000
            </h1>
        </section>
        <br><br><br><br><br>
        <header id="header" class="container-fluid sticky-top">
            <div class="row">
                <div class="col-6 kiri">
                    <a href="/"><img src="/images/logopng.png" width="75px" alt="" /></a>
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
                            <a class="nav-link me-4" href="/shoes">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">At Dawn</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">Encore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="new_arrival">New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-4" href="#">Cherry</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
            </div>
        </header> --}}

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

                        <div class="product-information">
                            <p>Hana heels</p>
                            <p>Colour : Coklat tua magetan</p>
                            <p>Heel Height : 7cm dengan silver (by request)</p>
                            <p>with 1 year warranty</p>
                            <p>Size Chart</p>
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
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <section class="value-proposition">
            <div class="container">
                <div class="row">
                    <div class="col-3 value-proposition__value">
                        <div>
                            <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/003-credit-card.svg?v=1599466438" width="75px" alt="" srcset="">
                            <h1>EASY & SECURE PAYMENT</h1>
                        </div>
                        
                    </div>
                    <div class="col-3 value-proposition__value value-proposition__value--value2">
                        <div>
                            <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/005-free-delivery.svg?v=1599466438" width="75px" alt="" srcset="">
                            <h1>FREE SHIPPING ON ORDERS ABOVE 1JT</h1>
                        </div>
                    </div>
                    <div class="col-3 value-proposition__value">
                        <div>
                            <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/006-exchange.svg?v=1599466439" width="75px" alt="" srcset="">
                            <h1>7 DAYS EXCHANGE</h1>
                        </div>
                    </div>
                    <div class="col-3 value-proposition__value">
                        <div>
                            <img src="https://cdn.shopify.com/s/files/1/0444/7544/9499/files/007-satisfaction.svg?v=1599466438" width="75px" alt="" srcset="">
                            <h1>PROUDLY MADE IN INDONESIA</h1>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        {{-- <footer>
            <div class="container">
                <div class="grid-container">
                    <div class="grid-item">
                        <p>Shop All</p>
                        <p>New Arrivals</p>
                        <p>Best Sellers</p>
                        <p>Sale</p>
                    </div>
                    <div class="grid-item">
                        <p>How to Order</p>
                        <p>Shipping</p>
                        <p>Return & Exchanges</p>
                        <p>Payment Confirmation</p>
                        <p>Terms of Service</p>  
                    </div>
                    <div class="grid-item">
                        <p>FAQ</p>
                        <p>Size Guide</p>
                        <p>About Us</p>
                        <p>Contact Us</p>
                    </div>
                    <div class="grid-item">
                        <p>Follow Us</p>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-instagram"></i>
                    </div>
                    <div class="grid-item">
                        <p>Join our newsletter to get the latest news</p>
                        <input type="text" placeholder="Enter your email address" class="mt-2">
                        <button type="button" class="button--primary mt-3"> <span> SUBSCRIBE </span> </button>
                    </div>
                </div>
            </div>
        </footer> --}}

 @endsection