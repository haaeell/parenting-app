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
    /* CSS untuk latar belakang navbar */
    .navbar {
      background-color: #00FF00; /* Hijau muda */
      padding: 10px; /* Atur padding sesuai kebutuhan */
    }

        /* CSS untuk elemen footer */
        .footer {
    background-color: #659384;
    padding: 20px;
    color: #FFFFFF;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
  }

  .footer-logo {
    max-width: 200px;
    max-height: 100px;
    position: absolute; /* Menetapkan posisi absolut untuk logo */
    left: 50%; /* Menggeser logo ke tengah secara horizontal */
    top: 50%; /* Menggeser logo ke tengah secara vertikal */
    transform: translate(-50%, -50%); /* Pusatkan logo di tengah */
  }

  .footer-text {
    text-align: left;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

    .footer-title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .footer-description {
      font-size: 16px;
    }
    .footer-form {
    display: flex;
    align-items: center;
  }

  .footer-input {
    padding: 8px;
    margin-right: 10px;
    border: 1px solid #ccc;
    width: 100%; 
    height: 100%; 
    background: #FCF7F1; 
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); 
    border-radius: 5px
  }

  .footer-button {
    padding: 8px 16px;
    margin-top: 10px; /* Tambahkan ruang di atas tombol submit */
    background-color: #659384;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .footer-form label {
    font-size: 14px;
    color: #666;
    margin-bottom: 5px;
  }

  .form-group {
    margin-bottom: 15px; /* Tambahkan ruang di antara kotak form */
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


   </style>



    <!-- Isi konten website Anda -->
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-8">
        <div style="color: black; font-size: 25px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Welcome to Parenting</div>
        <div style="color: black; font-size: 64px; font-family: Poppins; font-weight: 600; word-wrap: break-word">Parenting Path: <br/>Nurturing Futures, One<br/>Step at a Time</div>
        <div style="color: black; font-size: 25px; font-family: Poppins; font-weight: 400; word-wrap: break-word">Creating Stronger Bonds, Raising Exceptional Children</div>
     <a href="#" class="btn mt-3 text-white px-5" style= "background-color: #659384" >About us</a>
     </div>
            <div class="col-md-4 ">
                <img src="{{asset('image/a.png')}}" alt="Hero Image" class="img-fluid rounded" width="100%">
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
  
  
   <!-- Footer -->
   <div class="footer">
    <div class="footer-text">
      <h1 class="footer-title">Don't Miss Out</h1>
      <p class="footer-description">Sign up for more health information.</p>
    
         <!-- Form untuk email dan password -->
  <form action="#" method="post" class="footer-form">
    <div class="form-group">
      <label for="email">*EMAIL ADDRES:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" class="footer-input" required>
    </div>
    <div>
    </div>
    <div class="form-group">
      <label for="password">*PASSWORD:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" class="footer-input" required>
    </div>

    <!-- Tombol Submit -->
    <div class="form-group">
      <button type="submit" class="footer-button">
        <div style="width: 100%; height: 100%; border-radius: 5px; border: 1.50px white solid"></div>
        Submit
      </button>
    </div>
    </div></div>
<!-- Copyright -->
  <div class="copyright">
    @2023 copyright
  </div>

  
@endsection
