@extends('layout.template')

@section('content')

<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
    font-family: 'Roboto-Light', sans-serif;
    background-color: #BFBEBE;
    }

    .galery-container{
        display: flex;
        justify-content: center;
    }

    .galery-container img{
        width: 80px;
        margin: 20px 20px 0 0;
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

    .product__description h3#price{
        font-size: 16px;
        /* text-transform: uppercase; */
        font-weight: 400;
        color: black;
    }

    .product__description h3#afterprice{
        font-size: 16px;
        /* text-transform: uppercase; */
        font-weight: 400;
        color: red;
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

    .product__size .btn-primary{
        width: 93%;
        font-size: 14px;
        border: 1px solid #d1d1d1;
        margin-bottom: 20px;
        padding: 10px 0;
        background-color: transparent;
        color: #1c1b1b;
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

    .product-information p{
        font-size: 16px;
        color: #1c1b1b;
        line-height: 23px;
    }

    .value-proposition{
        margin-top: 60px;
        background-color: white;
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

    tbody, td, tfoot, th, thead, tr {
    border-style: solid;
    border-width: 1px !important;
    border-color: white !important;
}
    section#order .button-animate{
        border: 1px solid white;
        position: relative;
        transition: all .35s;
        background-color: white;
        padding: 10px 45px;
        font-weight: 300;
        font-size: 5rem
        left: 50%;
        margin-top:30px; 
        transform: translateX(100%);
    }
</style>

<section id="detailproduct">

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button> --}}
                            {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
                        </div>
    
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="{{asset('/images/product/imageproduct/'.$products->product_image) }}" class="d-block w-100" alt="...">
                            </div>
                            {{-- <div class="carousel-item">
                            <img src="./images/1607185722.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="./images/1607185764.jpg" class="d-block w-100" alt="...">
                            </div> --}}
                        </div>
    
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
    
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div>
    
                    {{-- <div class="galery-container">
                        <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                            <img src="./images/1607185632.jpg" alt="">
                        </div>
                        <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
                            <img src="./images/1607185722.jpg" alt="">
                        </div>
                        <div data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
                            <img src="./images/1607185764.jpg" alt="">
                        </div>
                    </div> --}}
                </div>
    
                <section class="product__description col-md-5 offset-md-1 col-sm-12">
                    <h1 class="py-2">{{$products->product_name}}</h1>
                    <h2 class="py-2">{{$products->colour}}</h2>
                    {{-- <h3 class="py-2" style="color: red">Rp. 300.000</h3> --}}
                    @if($products->discount== null)
                    <h3 id="price" class="py-2">Rp. {{ number_format($products->price, 0, ',', '.') }}</h3>
                    @else
                    {{-- <h2 class="py-2">({{$products->price-$products->discount}}% Off)</h2> --}}
                    {{-- <h3 id="afterprice" class="py-2">Rp. {{$products->price*($products->discount/100)}}<span style="text-decoration: line-through">Rp. {{$products->price}}</span></h3> --}}
                    <h3 id="price" class="py-2" style="text-decoration: line-through">Rp. {{ number_format($products->price, 0, ',', '.') }}</h3>
                    {{-- <span style="text-decoration: line-through">Rp. {{$products->price}}</span> --}}
                    <h3 id="afterprice" class="py-2">Rp. {{number_format($products->price-($products->price*($products->discount/100)), 0, ',', '.')}}</h3>
                    <h2 class="py-2">({{$products->discount}}% Off)</h2>
                    @endif
                    {{-- <h2 class="py-2">2 OTHER AVAILABLE OPTIONS</h2> --}}
                    {{-- <img src="/images/1607185632.jpg" class="img-thumbnail mb-3" width="64px" alt="...">
                    <img src="/images/1607185722.jpg" class="img-thumbnail mb-3" width="64px" alt="..."> --}}
    
                    <div class="row product__size">
                        {{-- <div class="col-6">
                            <p>Size: </p>
                        </div> --}}

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Size chart
                          </button>
                        {{-- <div class="col-6 product__size-chart">
                            <a href="#"><p>Size chart</p></a>
                        </div> --}}

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Size chart</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <img src="{{asset('/images/sizecartinfo/'.$sizecartinfo->image)}}" style="width: 850px" alt="">
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                </div>
                            </div>
                            </div>
                        </div>
    
                        {{-- <div class="product__size--table">
                            <h1>36</h1>
                            <h1>37</h1>
                            <h1>38</h1>
                            <h1>39</h1>
                            <h1>40</h1>
                        </div> --}}
                    </div>
    
                    {{-- <div class="product__button">
                        <button type="button" class="product__button--primary"> <span> ADD TO CART </span> </button>
                        <button type="button"> <i class="bi bi-suit-heart me-2"></i>Add To Wishlist </button>
                    </div> --}}
    
                    <div class="product-information">
                        <p>{{$products->product_name}}</p>
                        <p>Colour : {{$products->colour}}</p>
                        <p>Heel Height : {{$products->heel_height}}</p>
                        <p>{{$products->description}}</p>
                        <p>Size Chart</p>
                        <table class="table mb-5">
                            <thead>
                                <tr>
                                  <th scope="col">Size</th>
                                  <th scope="col">Foot Length(cm)</th>
                                </tr>
                              </thead>
                            <tbody>

                                @foreach ($sizecarts as $item)
                                    
                                <tr>
                                <td>{{$item->size}}</td>
                                <td>{{$item->foot_length}}</td>
                                </tr>
                                @endforeach
                                {{-- <tr>
                                <td>36</td>
                                <td>21cm</td>
                                </tr>
                                <tr>
                                <td>37</td>
                                <td>22cm</td>
                                </tr>
                                <tr>
                                <td>38</td>
                                <td>23cm</td>
                                </tr>
                                <tr>
                                <td>39</td>
                                <td>24cm</td>
                                </tr>
                                <tr>
                                <td>40</td>
                                <td>25cm</td>
                                </tr>
                                <tr>
                                <td>41</td>
                                <td>26cm</td>
                                </tr>
                                <tr>
                                <td>42</td>
                                <td>27cm</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    <section id="order">
                        <a type="button" href='https://api.whatsapp.com/send?phone=62{{$accounts->link_whatsapp}}' style="text-decoration: none; color: black;" class="button-animate"> <span> Order </span> </a>
                    </section>
                </section>
            </div>
        </div>
    </div>
    
    <section class="value-proposition">
        <div class="container">
            <div class="row">
                @foreach ($customerservices as $item)
                <div class="col-3 value-proposition__value">
                    <div>
                        <img src="{{asset('/images/customerservice/'.$item->image)}}" width="75px" alt="" srcset="">
                        <h1>{{$item->description_customer_service}}</h1>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-3 value-proposition__value value-proposition__value--value2">
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
                </div> --}}
            </div>
        </div>
        
    </section>
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