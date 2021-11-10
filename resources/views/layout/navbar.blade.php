<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .kiri {
        display: flex;
        justify-content: flex-end;
    }

    /* #notification { */
        /* height: 150px; */
        /* width: 100%;
        position: relative;
    } */

    /* #notification h1 {
        font-size: 12px;
        background-color: #fdfcee;
        padding: 15px 0;
    } */

    header#navbar{
        position: sticky;
        font-family: 'Roboto-Light', sans-serif;
        background-color: white;
        text-transform: uppercase;
        text-decoration: none;
        font-size: 17px;
    }

    /* header#header{
        position: relative;
        position: sticky;
        position: absolute;
    } */
    /* header#header .bg-color{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #f8f4f1;
        opacity: 1;

    } */

    /* header#header:hover {
        background-color: #9d9d9d;
        transition:background-color 0.35s linear;
    } */

    header#header .header__link a{
        font-family: 'Roboto-Light', sans-serif;
        text-transform: uppercase;
        text-decoration: none;
        color: black;
        font-size: 17px;
    }
</style>
{{-- <section id="notification" class="text-center ">
    <h1 class="display-6 text-uppercase">
        Free shipping for orders over IDR 1.000.000
    </h1>
</section>
<br><br><br><br><br> --}}

<header id="navbar" class="container-fluid sticky-top">
    <header id="header">
        <div class="bg-color"></div>
        <div class="row">
            <div class="col-6 kiri">
                <a href="/"><img src="/images/logopng.png" width="75px" alt="" /></a>
            </div>
            <div class="col-6 kanan d-flex align-items-center justify-content-end header__link">
                @if (Session::has('success'))
                    <a href="/logout" class="me-4">Logout</a>
                @else
                    <a href="/login-register" class="me-4">login</a>
                @endif
    
                {{-- <a href="#" class="me-4">Search</a>
                <a href="#" class="me-4">Cart</a> --}}
            </div>
        </div>
    
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid row">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    {{-- <li class="nav-item">
                        <a class="nav-link me-4" href="/shoes"><i class="bi bi-cart"></i> Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="/new_arrival"><i class="fas fa-shoe-prints"></i></i> New Arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="/custom"><i class="fas fa-palette"></i> Custom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="/aboutus"><img src="{{asset('/images/logo/aboutus.png') }}" style="width: 24px" alt=""></i> About Us</a>
                    </li> --}}


                    <li class="nav-item">
                        <a class="nav-link me-4" href="/shoes">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="/new_arrival">New Arrivals</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Product Type
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link me-4" href="/custom">Custom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4" href="/aboutus">About Us</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
        </div>
    </header>
</header>
