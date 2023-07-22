@extends('layouts.landingpage')

@section('css')
<style>
    .card {
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 32px;
        padding: 5px 10px;
        margin-bottom: 10px;
    }
    .form-group input {
        border: none;
        border-bottom: 1px solid #ccc;
        padding: 5px 0;
    }
    .forgot-password {
        text-align: right;
        font-size: 12px;
    }
    .btn-custom {
        background-color: #659384;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 50px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-custom:hover {
        background-color: #C2D2C5;

</style>
@endsection

@section('content')
<div style="background-color: #C2D2C5">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center gap-5 vh-100">
            <div class="col-md-4">
                <div class="card p-5">
                    <div class="card-body">
                        <h5 class="fw-bold text-center mb-5" >Sign In</h5>
                        <form>
                            <div class="form-group mb-5">
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group mb-5">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                                <div class="forgot-password">
                                    <span>Forgot password</span>
                                </div>
                            </div>
                            <button type="submit" class="fw-bold btn-custom mx-auto d-block mb-3">Sign In</button>
                            <p style="font-size: 12px;" class="text-center">Don’t have an account? Create account</p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('image/illustrationFamily.png')}}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

@endsection
