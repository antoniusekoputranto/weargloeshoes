@extends('layout.template')
@section('content')
<style>
    body {
        background-color: #9d9d9d;
        font-family: 'Roboto-Light', sans-serif;
    }

    .article-title {
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
    .article-img:focus,
    .article-img:active {
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

    .article-top {
        display: flex;
        justify-content: space-between;
    }

    .article-bottom {
        width: 70%;
    }

    .article-top:hover .overlay {
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
</style>

<section id="article" class="article py-5">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto col-sm-6 text-center">
                <h1 class="text-capitalize article-title">
                    Article
                </h1>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $item)
            <div class="col-md-4">
                <div class="article-top mb-5 mt-3">
                    <div class="card single-item">
                        <a href="/pages/article/detailarticle/{{$item->id}}">
                            <div class="img-container">
                                <img src="{{asset('/images/article/'.$item->image_article) }}" alt="" class="card-img-top product-img" />
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                            <a href="/pages/article/detailarticle/{{$item->id}}" style="text-decoration: none; color: black">
                            <h5 id="item-name">{{$item->title}}</h5>
                            <h5 id="item-name" style="color: red">{{$item->created_at}}</h5>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endSection