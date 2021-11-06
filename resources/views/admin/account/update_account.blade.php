@extends('admin.index')

@section('data')

{{-- <style>
    #description_company{
        height: auto;
        border: 1px solid black;
        background-color: aquamarine;
    }
</style> --}}

<div class="container">

    <h1>account</h1>
    <form action="/admin/update_account/{{$accounts->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="description_company">description_company</label>
        <textarea type="text" class="form-control" id="description_company" style="height: 450px" name="description_company">{{($accounts->description_company)}}</textarea>
        <h1>link_whatsapp</h1>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">+62</span>
            <input type="text" class="form-control" placeholder="whatsapp" name="link_whatsapp" aria-label="whatsapp" aria-describedby="basic-addon1" value="{{($accounts->link_whatsapp)}}">
        </div>
        <h1>link_facebook</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_facebook" aria-label="default input example" value="{{($accounts->link_facebook)}}">
        <h1>link_instagram</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_instagram" aria-label="default input example" value="{{($accounts->link_instagram)}}">
        <h1>link_tokopedia</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_tokopedia" aria-label="default input example" value="{{($accounts->link_tokopedia)}}">
        <h1>link_shopee</h1>
        <input class="form-control" type="text" placeholder="Default input" name="link_shopee" aria-label="default input example" value="{{($accounts->link_shopee)}}">

        <button type="submit" name="account" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
@endSection