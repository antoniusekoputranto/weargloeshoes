@extends('layout.template')
@section('content')
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #BFBEBE;
    }

    #detailarticle{
        font-family: "Roboto-Light", sans-serif;
        display: flex;
        margin-left: auto;
        margin-right: auto;
    }

    #title{
        text-align: center;
        font-weight: 1000;
        margin-left: auto;
        margin-right: auto;
        font-size: 164%;
    }

    #image_article{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 45%;
    }

    #contents{
        display: flex;
        text-align: justify;
        margin-left: auto;
        margin-right: auto;
        font-size: 125%;
    }
}
</style>

<section id="detailarticle">
    <section class="container">
        <section id="title" class="row mt-5">
            <p>{{$articles->title}}</p>
        </section>

        <section id="image_article" class="row mt-5">
            <img src="{{asset('/images/article/'.$articles->image_article)}}" class="d-block w-100" alt="...">
        </section>

        <section id="contents" class="row mt-5">
            {!! $articles->contents !!}
        </section>
    </section>
</section>
@endsection