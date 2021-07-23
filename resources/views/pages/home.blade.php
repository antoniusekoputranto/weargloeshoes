@extends('layout.template')


@section('content')
<style>

  #swiper .swiper-container {
    width: 100%;
    margin-top: -128px;
    height: 100%;
  }

  #swiper .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
  }

  #swiper .swiper-slide img {
    display: block;
    width: 100vw;
    height: 143vh;
    object-fit: cover;
  }
 /* swiper */

  #new-arrival .container {
    margin: 80px auto 100px;
  }
  #new-arrival .display-6 {
    text-align: center;
    font-size: 25px;
  }
  #new-arrival .container-card {
    padding-top: 50px;
    margin: 0px -80px;
  }

  #new-arrival .new-arr-content-desc{
    margin-top: 17px;
  }
  #new-arrival .new-arr-content-desc p.jdl{
    font-size: 17px;
  }
  #new-arrival .new-arr-content-desc p.price{
    font-size: 15px;
    margin-top: -12px;
    font-weight: 500;
    color: #c0b6a7;
  }
  #new-arrival .button-animate, footer button{
      border: 1px solid #cda398;
      position: relative;
      transition: all .35s;
      background-color: #cda398;
      padding: 10px 45px;
      font-weight: 300;
      font-size: 1.1rem
  }
  #new-arrival .view-all-product{
      left: 50%;
      margin-top:30px; 
      transform: translateX(-50%);
  }

  #new-arrival .button-animate span, footer button span{
      position: relative;
      z-index: 2;
  }

  #new-arrival .button-animate:after, footer button:after{
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      width: 0;
      height: 100%;
      background: #f8f4f1;
      transition: all .35s;
  }

  #new-arrival .button-animate:hover:after, footer button:hover:after{
      width: 100%;
  }

  #new-arrival .card-img-overlay{
      top: 68%;
      left: 10%;
  }

  #new-arrival .card .fade-2{
      position: absolute;
      opacity: 0;
      top: 0;
      left: 0;
      z-index: 99;
      transition: 0.5s;

  }
  #new-arrival .card:hover .fade-2 {
      opacity: 1;
  }

  #feed .container-feed{
      margin-top: 80px;
  }
  #feed .display-6{
    text-align: center;
    font-size: 25px;
  }

  #feed .image img{
    margin-top: 10px;
    width: 24.5vw;
    height: 24.5vw
  }
  #feed .black-hover{
    margin-top: 10px;
    background-color: black;
    opacity: 0;
    top: 0px;
    width: 24.5vw;
    height: 24.5vw;
    position: absolute;
    transition: 0.3s;
  }
  #feed .black-hover:hover{
    opacity: 0.4; 
  }


</style>

<style>
  #product .image{
    margin-left: 100px;
  }
  #product .image img{
    width: 450px;
  }
  #product .display-6 {
    text-align: center;
    font-weight: 400;
    font-size: 20px;
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



</style>

<section id="swiper">
    

    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="/shoes"><img src="{{asset('/images/splash.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/new_arrival"><img src="{{asset('/images/splash2.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/shoes"><img src="{{asset('/images/splash3.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/new_arrival"><img src="{{asset('/images/splash.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/shoes"><img src="{{asset('/images/splash2.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/new_arrival"><img src="{{asset('/images/splash3.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/shoes"><img src="{{asset('/images/splash.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/new_arrival"><img src="{{asset('/images/splash2.jpg') }}" alt=""></a>
          </div>
          <div class="swiper-slide">
            <a href="/shoes"><img src="{{asset('/images/splash3.jpg') }}" alt=""></a>
          </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        },
    });
    </script>

</section>

<section id="new-arrival">


  <div class="container">
      <h3 class="display-6">New Arrivals</h3>
    <div class="row container-card">
        @foreach ($new_arrivals as $new_arrival)
        <div class="col-md-3">
          <div class="new-arr-content" style="width: 18rem;">
            <a href="/detailproduct/{{$new_arrival->id}}">
              <div class="card">
                <img src="{{asset('/images/'.$new_arrival->product_image) }}" class="card-img-top fade-1" alt="...">
                {{-- <img src="{{asset('/images/image5.jpg') }}" class="card-img-top fade-2" alt="..."> --}}
              </div>
            </a>
            <div class="new-arr-content-desc">
              <a href="/detailproduct/{{$new_arrival->id}}" style="text-decoration: none; color: black">
                <p class="jdl" >{{$new_arrival->product_name}} | {{$new_arrival->colour}}</p>
              </a>
              <p class="price">{{$new_arrival->price}}</p>
            </div>
          </div>
          {{-- <div class="product-top mb-5 mt-3">
              <div class="card single-item">
                  <a href="/detailproduct/{{$new_arrival->id}}">
                      <div class="img-container">
                          <img src="{{asset('/images/'.$new_arrival->product_image) }}" alt="" class="card-img-top product-img" />
                      </div>
                  </a>
                  <div class="overlay-left">
                      <button type="button" class="btn btn-secondary" title="Quick Shop" data-toggle="modal" data-target="#previewimage{{$new_arrival->id}}"><i class="fa fa-eye" ></i></button>
                  </div>
                  <div class="overlay-right d-flex justify-content-end">
                      @if ($orders->where("user_name", session('user'))->where('product_id',($new_arrival->id))->isEmpty())
                          <a  href="/wishlist/{{$new_arrival->id}}/{{$new_arrival->product_image}}">       
                              <button onclick="showAlertAddWishlist()" type="button" class="btn btn-secondary " title="Quick Shop">
                                  <i class="fa fa-heart-o"></i>
                              </button>
                          </a>
                      @else
                      <a  href="/wishlist/delete/{{$new_arrival->id}}">     
                          <button onclick="showAlertDeleteWishlist()" type="button" class="btn btn-secondary " title="Quick Shop">
                                  <i class="fa fa-heart"></i> 
                          </button>
                      </a>
                      @endif
                  </div>
                  <a href="/detailproduct/{{$new_arrival->id}}">
                      <div class="card-body">
                          <div class="card-text d-flex justify-content-between text-capitalize">
                              <h5 id="item-name">{{$new_arrival->product_name}} - ID : {{$new_arrival->id}}</h5>
                              <span><i class="fas fa-dollar-sign">5</i></span>
                          </div>
                      </div>

                      <div class="product-bottom ml-3">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fas fa-star-half"></i>
                      </div>
                  </a>
              </div>
          </div> --}}
        </div>

        
        @endforeach
    </div>
    <a href="/new_arrival" style="text-decoration: none; color: black">
    
      <button type="button" class="view-all-product button-animate"> <span> View all products </span> </button>
    </a>
  <div class="row container-card">
    <div class="col-md-4">
      <div class="card bg-dark text-white">
        <img src="{{asset('/images/image6.jpg') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h3 class="card-title">Card title</h3>
          <button type="button" class="button-animate"> <span> View all products </span> </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-dark text-white">
        <img src="{{asset('/images/image6.jpg') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h3 class="card-title">Card title</h3>
          <button type="button" class="button-animate"> <span> View all products </span> </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card bg-dark text-white">
        <img src="{{asset('/images/image6.jpg') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h3 class="card-title">Card title</h3>
          <button type="button" class="button-animate"> <span> View all products </span> </button>
        </div>
      </div>
    </div>
  </div>

  </div>
</section>

<section id="product">
  <div class="container">
    <h3 class="display-6">FEATURED PRODUCT</h3>
    <div class="row mt-5">
        <div class="col-md-5 col-sm-12">  
          <a href="/detailproduct/{{$featured->id}}">
          
            <div class="image">
              <img src="{{asset('/images/'.$featured->product_image) }}" alt="">
            </div>
          </a>

  
           
        </div>
        <div class="product__description col-md-5 offset-md-1 col-sm-12">
          <h1 class="py-2">{{$featured->product_name}}</h1>
          <h2 class="py-2">{{$featured->colour}}</h2>
          <h3 class="py-2">{{$featured->price}}</h3>
          {{-- <h2 class="py-2">2 OTHER AVAILABLE OPTIONS</h2> --}}
          @foreach ($featureds as $item)
          <a href="/detailproduct/{{$item->id}}">
          
            <img src="{{asset('/images/'.$item->product_image) }}" class="img-thumbnail mb-3" width="64px" alt="...">     
          </a>
          
          @endforeach
          {{-- <div class="row product__size">
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
          </div> --}}
  
          <div class="product__button">
              <button type="button" class="product__button--primary"> <span> ADD TO CART </span> </button>
              {{-- <button type="button"> <i class="bi bi-suit-heart me-2"></i>Add To Wishlist </button> --}}
          </div>
          <a href="/detailproduct/{{$featured->id}}" style="color: black">View product details</a>
        </div> 
    </div>
  </div>
</section>

<section id="feed">
  <div class="container-feed">
    <h3 class="display-6">FROM OUR FEED</h3>
    <div class="row mt-5">
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
      <div class="col-3 ">
        <a href="">
          <div class="image">
            <img src="{{asset('/images/1607185632.jpg') }}" alt="">
            <div class="black-hover"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
