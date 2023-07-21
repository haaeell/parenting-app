@extends('layouts.landingpage')

@section('content')
<h2 class="text-center mt-5 fw-bold text-success">WELCOME TO THE DISCUSSION</h2> 
<h5 class="text-center mt-5 fw-bold text-success">ROOM HERE WE ARE WILLING TO ASSIST 
YOU IN UNDERSTANDING PARENTING PROBLEMS......</h5> 
  

<div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-body">
            <div class="chat-box">
              <!-- Chat messages will be displayed here -->
              <div class="message received">
                <p>Hi! Welcome to the chat.</p>
              </div>
              <div class="message sent">
                <p>Tell everyone what your problem is.......</p>
              </div>
              <!-- Add more messages here -->
            </div>
          </div>
          <div class="card-footer">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Ketik pesan...">
              <div class="input-group-append">
                <button class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection