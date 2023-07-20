@extends('layouts.landingpage')

@section('content')
<style>
    .img-container{
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url('{{asset('image/1.jpg')}}');
        background-size: cover;
        background-posisition: center;
    }
    .img-container2{
        width: 50%;
        height: 300px;
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url('{{asset('image/1.jpg')}}');
        background-size: cover;
        background-posisition: center;
    }
    .img-container3{
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url('{{asset('image/1.jpg')}}');
        background-size: cover;
        background-posisition: center;
    }
    .isi-content{
        margin-top: 300px;
    }
    .isi-content2{
        margin-top: 170px;
        color:white;
    }
</style>
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-8">
            <h4>Welcome to Parenting</h4>
            <h1 style="font-size:50px;">Parenting Path: Nurturing Futures, One Step at a Time</h1>
            <h4>Creating Stronger Bonds, Raising Exceptional Children</h4>                
            <a href="#" class="btn mt-3 text-white px-5" style= "background-color: #659384" >About us</a>
            </div>
            <div class="col-md-4 ">
                <img src="{{asset('image/bocil.png')}}" alt="Hero Image" class="img-fluid rounded" width="100%">
            </div>
        </div>
    </div>

    <section style="background-color:#C2D2C5 ">
        <div class="container py-5  my-5">
            <div class="row d-flex justify-content-center gap-4">
            <div class="col-md-5 img-container pt-5 text-light"  >
                <div class="isi-content">

                    <h2>Proses untuk Memantaskan Diri Menjadi Orang Tua Teladan</h2>
                        <p>Pola asuh sebagai sebuah proses bagaimana orang tua memperlakukan dan cara berinteraksi dengan anak didalamnya meliputi aktivitas yang bersifat ...</p>
                </div>
                </div>
                <div class="col-md-5">
                    <div class="row  d-flex justify-content-center">
                        <div class="col-md-6 bg-warning img-container2">
                        <div class="isi-content2">

                    <h4>Proses untuk Memantaskan Diri </h4>
                        <p>Pola asuh sebagai sebuah proses bagaimana  ...</p>
                </div>
                        </div>
                        <div class="col-md-6 bg-warning img-container2">
                        <div class="isi-content2">

                    <h4>Proses untuk Memantaskan Diri </h4>
                        <p>Pola asuh sebagai sebuah proses bagaimana  ...</p>
                </div>
                        </div>
                        <div class="col-md-12 bg-danger img-container3 ">
                        <div class="isi-content2">

<h4>Proses untuk Memantaskan Diri </h4>
    <p>Pola asuh sebagai sebuah proses bagaimana  ...</p>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
