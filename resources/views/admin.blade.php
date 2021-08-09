@extends('admin.index')

@section('data')
<div class="container">
    <a href="/admin/account" class="btn btn-primary">account</a>
    <a href="/admin/show_feed" class="btn btn-primary">feed</a>
    <a href="/admin/products" class="btn btn-primary">product</a>
    <a href="#" class="btn btn-primary">promo</a>  
    <a href="#" class="btn btn-primary">discount</a>
    <a href="/admin/show_event" class="btn btn-primary">event</a>
    <a href="/admin/post" class="btn btn-primary">type product</a>
    <a href="/admin/sizecartinfo" class="btn btn-primary">sizecartinfo</a>
    <a href="/admin/show_customerservice" class="btn btn-primary">customerservice</a>
</div>
@endSection