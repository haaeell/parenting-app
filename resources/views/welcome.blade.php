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
    



    /* CSS untuk latar belakang footer */
    .copyright {
      background-color: #F0A999; /* Hijau tua */
      padding: 10px; /* Atur padding sesuai kebutuhan */
      color: #FFFFFF; /* Teks warna putih pada footer */
    }

    

    /* CSS untuk isi konten */
    .content {
      background-color: #FCF7F1; /* Orange */
      padding: 20px; /* Atur padding sesuai kebutuhan */
    }

    /* CSS untuk isi konten */
    .testimoni {
      background-color: #C2D2C5; /* Orange */
      padding: 20px; /* Atur padding sesuai kebutuhan */
    }

    .testimoni-container {
      display: flex;
      justify-content: center; /* Mengatur agar kotak testimonial berada di tengah secara horizontal */
      align-items: flex-start; /* Mengatur agar kotak testimonial berada di atas (tepat di garis atas) */
      flex-wrap: wrap;
    }

    .testimoni-box {
      background-color: #FCF7F1;
      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
      border-radius: 20px;
      padding: 20px;
      margin: 10px;
      border: 1px solid #ccc;
      flex-basis: calc(33.33% - 20px); /* Setiap kotak akan menempati sepertiga dari lebar container */
      display: flex;
      flex-direction: column;
      justify-content: flex-start; /* Mengatur agar teks ulasan berada di atas (tepat di garis atas) */
      align-items: center;
      text-align: center; /* Teks ulasan akan menjadi rata tengah */
    }

    /* CSS untuk gambar pengguna */
    .user-image {
      max-width: 100px; /* Ubah sesuai keinginan Anda */
      max-height: 100px; /* Ubah sesuai keinginan Anda */
      border-radius: 50%; /* Membuat gambar menjadi lingkaran (bulat) */
      object-fit: cover; /* Hindari gambar terdistorsi saat dijadikan lingkaran */
      margin-bottom: 10px; /* Agar ada jarak antara gambar pengguna dan teks ulasan */
    }

    /* CSS untuk nama pengguna */
    .user-name {
      font-weight: bold;
    }

    /* CSS untuk teks ulasan */
    .testimonial-text {
      font-style: italic;
      margin-top: 10px;
      text-align: center;
    }

        .img-container {
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url('{{ asset('image/cipung.png') }}');
            background-size: cover;
            background-posisition: center;

            border-radius: 32px;
        }

        .img-container2 {

            border-radius: 32px;
            width: 50%;
            height: 300px;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url('{{ asset('image/cipung.png') }}');
            background-size: cover;
            background-posisition: center;
        }

        .img-container3 {
            border-radius: 32px;
            width: cipung00%;
            height: cipung00%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), url('{{ asset('image/cipung.png') }}');
            background-size: cover;
            background-posisition: center;
        }

        .isi-content {
            margin-top: 350px;
        }

        .isi-content2 {
            margin-top: 230px;
            color: white;
        }
    </style>
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-8">
                <h5 class="fw-semibold " >Welcome to ParentApp! </h5>
                <h1 style="font-size:50px;" class="fw-bold text-success">Parenting Path: Nurturing Futures, One Step at a Time</h1>
                <p class="lh-base">Creating Stronger Bonds, Raising Exceptional Children . Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Qui fuga commodi quibusdam quo. Culpa nobis placeat quia, velit maxime iure!</p>
                <a href="#" class="btn mt-3 btn-login px-5">About us</a>
            </div>
            <div class="col-md-4 ">
                <img src="{{ asset('image/cipung.png') }}" alt="Hero Image" class="img-fluid rounded" width="100%">
            </div>
        </div>
    </div>

    <section style="background-color:#C2D2C5 ">
        <div class="container py-5  my-5">
            <h4 class="text-success text-center fw-bold mb-5">Category: Top-importance articles</h4>

            <div class="row d-flex justify-content-center gap-4">
                <div class="col-md-5 img-container pt-5 text-light">
                    <div class="isi-content">
                        <span class="badge rounded-pill text-bg-warning text-white px-3 py-1">Badge</span>

                        <h2>Proses untuk Memantaskan Diri Menjadi Orang Tua Teladan</h2>
                        <p>Pola asuh sebagai sebuah proses bagaimana orang tua memperlakukan dan cara berinteraksi dengan
                            anak didalamnya meliputi aktivitas yang bersifat ...</p>
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
    </section>

    <section class="shadow-lg mb-5">
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <h1 class="text-success fw-bold mb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis consectetur, modi similique animi
                        maiores quia facilis ex velit voluptates quae alias unde explicabo perferendis expedita quo eum?
                        Corrupti quasi nostrum, doloremque sunt odit exercitationem! Culpa dolorum atque itaque animi
                        facilis officiis velit, minima obcaecati odio, quia aut quam suscipit laudantium natus t...</p>
                    <button class="btn btn-login px-2 mt-3 text-white">Selengkapnya</button>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('image/cipung.png') }}" alt="Hero Image" class="img-fluid rounded" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- Isi konten testimoni -->
  <div class="testimoni">
    <div style ="text-align: center; color: #1E1E1E; font-size: 40px; font-family: Poppins; font-weight: 500; word-wrap: break-word">TESTIMONIALS</div>
    <div style="text-align: center; color: black; font-size: 25px; font-family: Poppins; font-weight: 500; word-wrap: break-word">Ini testimoni ya gais Ini testimoni ya gais<br/>Ini testimoni ya gais</div>
    
    <!-- Testimoni 1 -->
    <div class="testimoni-container">
      <div class="testimoni-box">
        <img class="user-image" style="width: 30%; height: 30%"  src="{{asset('image/cipung.png')}}">
        <p class="user-name">John Doe</p>
        <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec est auctor, elementum massa ac, vestibulum felis. Ut vel ex lorem.</p>
      </div>

      <!-- Testimoni 2 -->
      <div class="testimoni-box">
        <img class="user-image" style="width: 30%; height: 30%"  src="{{asset('image/cipung.png')}}">
        <p class="user-name">Jane Smith</p>
        <p class="testimonial-text">Vestibulum sagittis dui vel justo consectetur blandit. Nam eget est a sem tempus tincidunt.</p>
      </div>

      <!-- Testimoni 3 -->
      <div class="testimoni-box">
        <img class="user-image" style="width: 30%; height: 30%"  src="{{asset('image/cipung.png')}}">
        <p class="user-name">Michael Johnson</p>
        <p class="testimonial-text">Suspendisse vehicula varius justo, nec laoreet neque tempor sit amet. Donec dapibus, urna nec eleifend laoreet.</p>
      </div>
    </div>
  </div> 
  

    {{-- <section class="bg-success vh-100">
        <div class="container py-5 text-white fw-bold">
            <h2 class="text-center">
                Testimoni
            </h2>
        </div>
    </section> --}}
@endsection
