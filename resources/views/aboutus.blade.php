@extends('layout.template')

@section('content')

<style>
    body {
    font-family: 'Roboto-Light', sans-serif;
    background-color: #BFBEBE;
    }

    .aboutus h1.judul{
        text-align: center;
        margin: 50px 0px;
        font-size: 23px;
    }

    .aboutus p{
        text-align: justify;
        margin: 0px 254px 80px;
        font-size: 19px;
    }
</style>

<section id="aboutus">
    <div class="container aboutus">
        <h1 class="judul">ABOUT US</h1>
        <p>{!! $accounts->description_company !!}</p>
    </div>
</section>
@endsection
