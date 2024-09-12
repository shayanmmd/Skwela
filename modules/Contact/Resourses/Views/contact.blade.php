@extends('layout')

@section('content')



<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
  <div class="container">
    <div class="row align-items-center site-hero-inner justify-content-center">
      <div class="col-md-8 text-center">

        <div class="mb-5 element-animate">
          <h1>Contact Us</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END section -->

@if(session('success'))
    <div class="alert alert-success text-center m-3">
        {{ session('success') }}
    </div>
@endif

@if(session('unsuccess'))
    <div class="alert alert-danger text-center m-3">
        {{ session('unsuccess') }}
    </div>
@endif

<section class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="{{route('contact-store')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <label for="name">Name</label>
              <input value="{{old('name')}}" name="name" type="text" id="name" class="form-control ">

              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror

            </div>
            <div class="col-md-4 form-group">
              <label for="phone">Phone</label>
              <input value="{{old('phone')}}" name="phone" type="text" id="phone" class="form-control ">
              @error('phone')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="col-md-4 form-group">
              <label for="email">Email</label>
              <input value="{{old('email')}}" name="email" type="email" id="email" class="form-control ">
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Write Message</label>
              <textarea value="{{old('message')}}" name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
              @error('message')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="submit" value="Send Message" class="btn btn-primary">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- END section -->


@endsection