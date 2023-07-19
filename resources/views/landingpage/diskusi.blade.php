@extends('layouts.landingpage')

@section('content')
    <h2 class="text-center mt-5">DISCUSSION FORUM</h2> 
    <h1 class="text-center mt-5">    </h1> 
    
    <div class="container mt-4 ">
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-md-6">
                <form>
                    <div class="form-group d-flex">
                        <textarea class="form-control" id="commentInput" rows="1" placeholder=" Tell everyone what your problem is......."></textarea>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <h1 class="text-center mt-5">    </h1> 
    <!-- First row with three buttons -->
 
    <h4 class="row d-flex justify-content-center mt-5">Categories</h4> 
    <h1 class="text-center mt-4">    </h1> 

<div class="container">
    <div class="row d-flex justify-content-center mb-4">
      <div class="col-md-2" >
      <button type="button" class="btn btn-primary w-100">Pregnancy </button>
      </div>
      <div class="col-md-2">
      <button type="button" class="btn btn-primary w-100"> Bebies</button>
      </div>
      <div class="col-md-2">
      <button type="button" class="btn btn-primary w-100">Mental Health </button>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-2" >
      <button type="button" class="btn btn-primary w-100">Starting A Family</button>
      </div>
      <div class="col-md-2">
      <button type="button" class="btn btn-primary w-100"> Raising Kids</button>
      </div>
      <div class="col-md-2">
      <button type="button" class="btn btn-primary w-100">Kinderd </button>
      </div>
    </div>
  </div>

  <h4 class="row d-flex justify-content-center mt-5">Popular Threads</h4> 

  <div class="container mt-4">
    <div class="row d-flex justify-content-center mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Profile Photo -->
                        <div class="col-md-3">
                            <img src="https://i.pinimg.com/736x/55/3a/b5/553ab5f0f4090b47e54ee84a39905ae5.jpg" alt="Profile Photo" class="img-fluid rounded-circle mb-3" style="max-width: 100px;">
                        </div>
                        <div class="col-md-8">
                            <h5 class="card-title">Taehyoung</h5>
                            <p class="card-text">I educate my child with the method of eating while learning.</p>
                            <div class="mt-2 d-flex gap-3 mb-3">
                                <span class="mr-2">100 Likes</span>
                                <a href="" class="nav-link ">Like</a>
                                <span class="card-text"><small class="text-muted">19 Juli 2023</small></span>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tambahkan komentar...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Kirim</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  


@endsection