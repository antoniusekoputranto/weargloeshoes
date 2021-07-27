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

    header#header{
        /* position: relative; */
        /* position: sticky; */
        /* position: absolute; */
    }
    /* header#header .bg-color{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #f8f4f1;
        opacity: 1;

    } */

    header#header:hover {
        background-color: #f8f4f1;
        transition:background-color 0.35s linear;
    }

    header#header .header__link a{
        text-transform: uppercase;
        text-decoration: none;
        color: #1c1b1b;
        font-size: 12px;
    }

</style>
{{-- <section id="notification" class="text-center ">
    <h1 class="display-6 text-uppercase">
        Free shipping for orders over IDR 1.000.000
    </h1>
</section>
<br><br><br><br><br> --}}
<header id="header" class="container-fluid sticky-top">
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
                <li class="nav-item">
                    <a class="nav-link me-4" href="/shoes">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-4" href="/new_arrival">New Arrivals</a>
                </li>
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