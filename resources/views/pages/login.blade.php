@extends('layout.template')

@section('content')

<style>
    .login {

        margin-top: 60px;
        margin-bottom: 370px;
        padding: 40px;
        border: solid 1px lightgrey;
    }
</style>

<div class="container login">
    @if(Session::has('register'))
    <div class="alert alert-success" role="alert">
        {{Session('register')}}
    </div>
    @endif
    @if(Session::has('login'))
    <div class="alert alert-danger" role="alert">
        {{Session('login')}}
    </div>
    @endif
    <h3 class="d-flex justify-content-center">Login</h3>
    <form action="auth/login" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <br><br>
        <small class="d-flex justify-content-start"><a href="register">Don't have an account yet?</a></small>
        <small class="d-flex justify-content-start mt-3"><a href="admin-login">Admin</a></small>
    </form>
</div>

@endSection