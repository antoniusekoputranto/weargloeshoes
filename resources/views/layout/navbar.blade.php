<!-- <nav class="navbar navbar-expand-sm navbar-dark bg-black fixed-top"> -->
    <!-- <div class="container"> -->
        <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/" style="position:absolute;left:50vw;transform:translateX(-50%);margin-top:-30px;"><img style="width:80px;" src="./images/logopng.png" alt=""></a>
        <div class="collapse navbar-collapse d-flex flex-column flex-wrap mt-2" id="navbarCollapse"> -->
            <!-- <div class="nav-row1 text-right" > -->
                <!-- <a href="/" class="navbar-brand ">gloeshoes.leather</a> -->   
                <!-- <div class="invisible">tset</div> -->
                <!-- <ul class="navbar-nav ml-auto pt-4">

                    @if (Session::has('success'))
                    <li class="nav-item active">
                        <a href="/logout" class="nav-link">Logout</a>
                    </li>
                    @else
                    <li class="nav-item active">
                        <a href="login-register" class="nav-link">Login</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a href="search" class="nav-link">
                            search
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="cart" class="nav-link">
                            <i class="fas fa-shopping-cart "></i> cart
                        </a>
                    </li>

                </ul> -->
            <!-- </div> --> 

            <!-- <ul class="navbar-nav flex-row"> -->

                <!-- <li class="nav-item active ml-5 mr-5">
                    <a href="/" class="nav-link">Home</a>
                </li> -->
                <!-- <li class="nav-item active dropdown ml-5 mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/shoes">Shop All</a>
                        <a class="dropdown-item" href="#">Menu 2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">-</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item active ml-5 mr-5">
                    <a href="new_arrival" class="nav-link">New Arrivals</a>
                </li> -->

                <!-- <li class="nav-item active ml-5 mr-5">
                    <a href="custom" class="nav-link">Custom</a>
                </li> -->
            <!-- </ul> -->

        <!-- </div>
    </div>
</nav> -->
















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
        background-color: transparent;
        /* margin-top: -130px; */
        position: absolute;
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
<section id="notification" class="text-center px-3">
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
</header>