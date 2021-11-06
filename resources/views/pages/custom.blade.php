@extends('layout.template')

@section('content')

<style>

    body{
        background-color: #bfbebe;
        font-family: 'Roboto-Light', sans-serif;
    }

    .custom-catalogue a {
        text-decoration: none;
    }

    .container::-webkit-scrollbar {
        background-color: lightgrey;
        border-radius: 20px;
        height: 10px;
        margin: 20px 20px;
    }

    .container::-webkit-scrollbar-thumb {
        background-color: lightskyblue;
        border-radius: 20px;


    }

    /* .upload {
        margin-top: 40px;
        margin-bottom: 40px;
        border: 2px dotted darkgrey;
        padding: 20px;
    } */

    .contact-custom {
        margin-bottom: 40px;
    }

    .contact-custom p {
        margin-right: 20px;
        margin-top: 8px;
    }

    .custom-rules ul {
        list-style: none;
    }

    .custom-rules h6 {
        font-weight: bold;
    }

    @media (max-width: 768px) {
        ::-webkit-scrollbar {
            display: none;
        }
    }
</style>

<div class="container">
    <div class="custom-rules mt-5">
        <h6>Note!</h6>
        @foreach ($customnotes as $item1)
            
        <ul>
            {{-- <li>* Hit download button below to get shoes template</li>
            <li>* After designing your shoes, click upload button</li> --}}
            <li>* {{$item1->description_note}}</li>
        </ul>
        @endforeach
    </div>
</div>

<div class="container custom mt-5 d-flex justify-content-between overflow-auto">
    @foreach ($customtestimonys as $item1)
        
    <div class="col-md-4 ">
        <div class="custom-catalogue ">
            <img src="{{asset('/images/custom/customtestimony/'.$item1->image_testimony) }}" alt="..." width="300" height="300">
            {{-- <a href="" class="d-flex justify-content-center">
                <button type="button" class="btn btn-dark mt-3 mb-4">Download Template</button>
            </a> --}}
        </div>
    </div>
    @endforeach
    {{-- <div class="col-md-4 ">
        <div class="custom-catalogue ">
            <img src="../images/shoes-2.jpg" alt="..." width="300" height="300">
            <a href="" class="d-flex justify-content-center">
                <button type="button" class="btn btn-dark mt-3 mb-4">Download Template</button>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="custom-catalogue ">
            <img src="../images/shoes-3.jpg" alt="..." width="300" height="300">
            <a href="" class="d-flex justify-content-center">
                <button type="button" class="btn btn-dark mt-3 mb-4">Download Template</button>
            </a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="custom-catalogue ">
            <img src="../images/shoes-4.jpg" alt="..." width="300" height="300">
            <a href="" class="d-flex justify-content-center">
                <button type="button" class="btn btn-dark mt-3 mb-4">Download Template</button>
            </a>
        </div>
    </div> --}}
</div>

{{-- <div class="container upload">
    <form action="">
        <p>Upload your custom design here!</p>
        <input type="file" class="form-control-file" id="product_image" name="product_image">
        <button type="button" class="btn btn-dark mt-4">Upload</button>
    </form>
</div> --}}

<div class="container contact-custom d-flex justify-content-center">
    <p>Contact us</p>
    <a href="https://api.whatsapp.com/send?phone=62{{$akunperusahaan->link_whatsapp}}">
        <img src="../images/whatsapp.png" alt="" width="40" height="40">
    </a>
</div>

@endSection