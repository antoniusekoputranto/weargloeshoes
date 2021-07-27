@extends('layout.template')

@section('content')


<style>
    .login {

        margin-top: 60px;
        margin-bottom: 370px;
        padding: 40px;
        border: solid 1px lightgrey;
    }

    .reg {
        margin-top: 60px;
        margin-bottom: 370px;
        padding: 40px;
        border: solid 1px lightgrey;
    }

</style>

<div class="container">
    <div class="row">
        <div class="container login col-5">
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
                <!-- <small class="d-flex justify-content-start"><a href="register">Don't have an account yet?</a></small> -->
                <small class="d-flex justify-content-start mt-3"><a href="admin-login">Admin</a></small>
            </form>
        </div>

        <div class="col-2"></div>
 
        <div class="container reg  col-5">
            <h3 class="d-flex justify-content-center">Register</h3>
            <form action="auth/register" method="POST">
                {{ csrf_field() }}
                <div class="form-group mt-5">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{old('phone')}}">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{old('password')}}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmation Password</label>
                    <input type="password" class="form-control @error('confirm-pass') is-invalid @enderror" id="confirm-pass" name="confirm-pass" value="{{old('confirm-pass')}}">
                    @error('confirm-pass')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div> -->
                <button type="submit" class="btn btn-primary">Register</button>
                <br><br>
                <!-- <small class="d-flex justify-content-start"><a href="login">Already have an account?</a></small> -->
            </form>
        </div>
        
    </div>
</div>






@endSection