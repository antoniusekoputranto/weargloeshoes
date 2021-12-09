@extends('admin.index')

@section('data')
<div class="container">
    <a href="/admin/account" class="btn btn-primary">Account</a>
    <a href="/admin/show_feed" class="btn btn-primary">Feed</a>
    <a href="/admin/products" class="btn btn-primary">Product</a>
    {{-- <a href="#" class="btn btn-primary">promo</a>  
    <a href="#" class="btn btn-primary">discount</a> --}}
    <a href="/admin/show_event" class="btn btn-primary">Event</a>
    <a href="/admin/post" class="btn btn-primary">Product Type</a>
    <a href="/admin/sizecartinfo" class="btn btn-primary">Size Cart Info</a>
    <a href="/admin/show_customerservice" class="btn btn-primary">Customer Service</a>
    <a href="/admin/customnote/show_customnote" class="btn btn-primary">Custom</a>
    {{-- <a href="/admin/show_imageproduct" class="btn btn-primary">imageproduct</a> --}}
    <a href="/admin/show_article" class="btn btn-primary">Article</a>
</div>
@endSection