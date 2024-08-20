@extends('layout')

@section('content')

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-8 text-center">

                <div class="mb-5 element-animate">
                    <h1>Register</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->


<section class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 box">
                <h2 class="mb-5">Register new account</h2>
                <form action="#" method="post">

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">Email Address</label>
                            <input type="text" id="email" class="form-control ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name">Password</label>
                            <input type="password" id="password" class="form-control ">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12 form-group">
                            <label for="name">Re-type Password</label>
                            <input type="password" id="re-password" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Register" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END section -->


@endsection