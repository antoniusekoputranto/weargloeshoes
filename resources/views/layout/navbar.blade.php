<nav class="navbar navbar-expand-sm navbar-dark bg-black fixed-top">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="/" style="position:absolute;left:50vw;transform:translateX(-50%);margin-top:-30px;"><img style="width:80px;" src="./images/logopng.png" alt=""></a>
        <div class="collapse navbar-collapse d-flex flex-column flex-wrap mt-2" id="navbarCollapse">
            <!-- <div class="nav-row1 text-right" > -->
                <!-- <a href="/" class="navbar-brand ">gloeshoes.leather</a> -->   
                <!-- <div class="invisible">tset</div> -->
                <ul class="navbar-nav ml-auto pt-4">

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

                </ul>
            <!-- </div> --> 

            <ul class="navbar-nav flex-row">

                <!-- <li class="nav-item active ml-5 mr-5">
                    <a href="/" class="nav-link">Home</a>
                </li> -->
                <li class="nav-item active dropdown ml-5 mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/shoes">Shop All</a>
                        <a class="dropdown-item" href="#">Menu 2</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">-</a>
                    </div>
                </li>
                <li class="nav-item active ml-5 mr-5">
                    <a href="new_arrival" class="nav-link">New Arrivals</a>
                </li>

                <li class="nav-item active ml-5 mr-5">
                    <a href="custom" class="nav-link">Custom</a>
                </li>
            </ul>

        </div>
    </div>
    

</nav>