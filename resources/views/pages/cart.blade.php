@extends('layout/template')


@section('content')

<style>
    .cart {
        margin-bottom: 370px;
    }
</style>

<div class="container cart">
    <div class="table-responsive mb-3">
        <table class="table table-bordered mt-5 mb-5">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $o)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$o->id}}</td>
                    <td>{{$o->user_name}}</td>
                    <td>{{$o->product_id}}</td>
                    <td>
                        <a href="/cart/delete/{{$o->id}}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-primary">Go to Payment</button>
    </div>
</div>
@endSection