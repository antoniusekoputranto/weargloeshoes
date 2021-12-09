@extends('layout.template')

@section('content')

<style>
    body {
        background-color: #9d9d9d;
        font-family: 'Roboto-Light', sans-serif;
    }


    .product-title {
        color: white;
    }

    .card {
        background-color: #9d9d9d;
    }

    .card-text {
        color: white;
    }


    .single-item {
        display: inline-block;
        vertical-align: middle;
        transform: perspective(1px) translate(0);
        box-shadow: 0 0 1 1px rgb(247, 241, 241);
        position: relative;
        transition-duration: 0.3s;
        transition-property: transform;
        cursor: pointer;

    }

    .single-item:before {
        pointer-events: none;
        position: absolute;
        z-index: -1;
        content: "";
        top: 100%;
        left: 5%;
        height: 10px;
        width: 90%;
        opacity: 0;
        background: radial-gradient(ellipse at center, rgba(248, 248, 248, 0.35) 0%, rgba(247, 244, 244, 0) 80%);
        transition-duration: 0.3s;
        transition-property: transform, opacity;
    }

    .single-item:hover,
    .single-item:focus,
    .single-item:active {
        transform: translateY(-5px);
    }

    .single-item:hover:before,
    .single-item:focus:before,
    .single-item:active:before {
        opacity: 1;
        transform: translateY(5px);
    }



    .img-container {
        position: relative;
        overflow: hidden;
        cursor: pointer;

    }

    .img-container {
        display: inline-block;
        vertical-align: middle;
        transform: perspective(1px) translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        transition-duration: 0.3s;
        transition-property: box-shadow, transform;
    }

    .img-container:hover,
    .product-img:focus,
    .product-img:active {
        box-shadow: 1px 0px 1px 4px rgba(247, 243, 243, 0.9);
        transform: scale(1.1);
    }




    .overlay {
        display: block;
        opacity: 0;
        position: absolute;
        top: 0%;


        margin-left: 0;
        width: 30%;
    }


    .product-top {
        display: flex;
        justify-content: space-between;
        /* width: 30%; */
        /* padding-right: 10px; */
    }

    .product-bottom {
        width: 70%;
        /* height: 50%; */
    }

    .product-top:hover .overlay {
        opacity: 1;
        margin-left: 0%;
    }

    .cart-modal {
        transform: scale(0);
        display: none;
    }

    .form-back {
        background-color: white;
        padding: 20px;
        border-top: 4px solid black;
    }

    .card-body h1{
        font-size: 18px;
        text-transform: uppercase;
        font-weight: 400;
        color: #1c1b1b;
    }

    .card-body h2{
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        color: #1c1b1b;
    }

    .card-body h3#price{
        font-size: 16px;
        /* text-transform: uppercase; */
        font-weight: 400;
        color: black;
    }

    .card-body h3#afterprice{
        font-size: 16px;
        /* text-transform: uppercase; */
        font-weight: 400;
        color: red;
    }
</style>

<section id="products" class="products py-5">
    <div class="container">

        <div class="row">
            <div class="col-10 mx-auto col-sm-6 text-center">
                <h1 class="text-capitalize product-title">
                    New Arrivals
                </h1>
            </div>
        </div>

        <div class="row container">
            @foreach ($products as $p)
            <div class="col-md-4">
                <div class="product-top mb-5 mt-3">
                    <div class="card single-item">
                        <a href="/detailproduct/{{$p->id}}">
                        
                            <div class="img-container">
                                <img src="{{asset('/images/product/imageproduct/'.$p->product_image) }}" alt="" class="card-img-top product-img" />
                            </div>
                        </a>
                        {{-- <div class="overlay">
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-eye"></i></button>
                            <button type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-heart-o"></i></button>
                            <a href="/cart/{{$p->id}}">
                                <button onclick="showAlert()" type="button" class="btn btn-secondary" title="Quick Shop"><i class="fa fa-shopping-cart"></i></button>
                            </a>

                        </div> --}}

                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <a href="/detailproduct/{{$p->id}}" style="text-decoration: none; color: black">
                                    <h5 id="item-name">{{$p->product_name}} | {{$p->colour}}</h5>
                                </a>
                                {{-- <span style="color: red">Rp. 300.000</span> --}}
                                {{-- <span>Rp. {{ number_format($p->price, 0, ',', '.') }}</span>
                                <span>({{$p->discount}}% Off)</span> --}}
                            </div>
                            <div id="price">
                                @if($p->discount== null)
                                <h3 id="price" class="py-2">Rp. {{ number_format($p->price, 0, ',', '.') }}</h3>
                                @else
                                <h3 id="price" class="py-2" style="text-decoration: line-through">Rp. {{ number_format($p->price, 0, ',', '.') }}</h3>
                                <h3 id="afterprice" class="py-2">Rp. {{number_format($p->price-($p->price*($p->discount/100)), 0, ',', '.')}}</h3>
                                <h2 class="py-2">({{$p->discount}}% Off)</h2>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="product-bottom ml-3">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        {{-- {{ $products ->links() }} --}}

    </div>

</section>

{{-- <script>
    function showAlert() {
        alert('Item add to shopping cart');
    }
</script> --}}

@endSection