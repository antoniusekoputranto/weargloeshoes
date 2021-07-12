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

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>

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
                        </div>
                    </section>
                </div>
            </div>
        </div>

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