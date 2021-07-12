@extends('layout.template')


@section('content')
<!--Slider-->
<section id="main">
    <div id="Carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <a href="/shoes" class="btn btn-color slide-btn btn-lg">
                            Shop Now >>
                        </a>
                    </div>
                </div>
            </div>
            <!--End-->
            <div class="carousel-item carousel-image-2">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <a href="/shoes" class="btn btn-color slide-btn btn-lg">
                            Shop Now >>
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item carousel-image-3">
                <div class="container">
                    <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        <a href="/shoes" class="btn btn-color slide-btn btn-lg">
                            Shop Now >>
                        </a>
                    </div>
                </div>
            </div>

            <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#Carousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

    </div>
</section>
<!--End of slider-->

<!--Service section-->
<section class="services py-5 text-center">
    <div class="container">
        <div class="row">
            <!--Single service-->
            <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                <span class="service-icon">
                    <i class="fas fa-globe fa-2x"></i>
                </span>
                <h5 class="font-weight-bold text-uppercase">
                    Good Quality
                </h5>
                <p class="text">
                    We selling good product with good quality
                </p>
            </div>
            <!--end of Single Service-->
            <!--Single service-->
            <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                <span class="service-icon">
                    <i class="fas fa-stamp fa-2x"></i>
                </span>
                <h5 class="font-weight-bold text-uppercase">
                    Customize
                </h5>
                <p class="text">
                    Made by Order Custom Sepatu Kulit
                </p>
            </div>
            <!--end of Single Service-->
            <!--Single service-->
            <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                <span class="service-icon">
                    <i class="fas fa-file-invoice-dollar fa-2x"></i>
                </span>
                <h5 class="font-weight-bold text-uppercase">
                    Good Price
                </h5>
                <p class="text-capitalize">
                    we offer a good price for you
                </p>
            </div>
            <!--end of Single Service-->
        </div>
    </div>
</section>

<!--end of service section-->

<section id="products" class="products py-5">
    <div class="container">
        <!--Section title-->
        <div class="row">
            <div class="col-10 mx-auto col-sm-6 text-center">
                <h1 class="text-capitalize product-title">
                    New Arrivals
                </h1>
            </div>
        </div>
        <!--End of section title-->
        <!--Product items-->
        <div class="row products items" id="product-items">
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/images1.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">100</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image2.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">500</i></span> -->
                        </div>
                    </div>
                </div>


            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/Model1.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">150</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image4.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">500</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image5.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">330</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image6.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">410</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->

        </div>
        <!--End of product items-->
    </div>
</section>

<!--Featured Products-->
<section id="products" class="products py-5">
    <div class="container">
        <!--Section title-->
        <div class="row">
            <div class="col-10 mx-auto col-sm-6 text-center">
                <h1 class="text-capitalize product-title">
                    Featured Products
                </h1>
            </div>
        </div>
        <!--End of section title-->
        <!--Product items-->
        {{-- <div class="row products items" id="product-items">
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/images1.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">100</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image2.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">500</i></span> -->
                        </div>
                    </div>
                </div>


            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/Model1.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">150</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image4.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">500</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image5.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">330</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->
            <!--Single Item-->
            <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                <div class="card single-item">
                    <div class="img-container">
                        <img src="./images/image6.jpg" alt="" class="card-img-top product-img" />
                    </div>
                    <div class="card-body">
                        <div class="card-text d-flex justify-content-between text-capitalize">
                            <!-- <h5 id="item-name">Sample Products</h5>
                            <span><i class="fas fa-dollar-sign">410</i></span> -->
                        </div>
                    </div>
                </div>

            </div>
            <!--End of single item-->

        </div> --}}
        <!--End of product items-->
    </div>
</section>
<!--End of Featured product-->

<!--about section-->
<section id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <img src="./images/logopng.png" width="400" height="400" class="img-fluid watch-img" />
            </div>
            <div class="col-lg-7 text-lg-right text-center text-color about-text">
                <h1>About us</h1>
                <p class="text">gloeshoes.leather merupakan perusahaan yang bergerak dibidang sepatu kulit custom.</p>
            </div>
        </div>
    </div>
</section>
<!--End of about section-->
<!--Best Seller Sec-->
<!--Best Seller Sec-->
@endsection