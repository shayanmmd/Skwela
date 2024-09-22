<!doctype html>
<html lang="en">

<head>
    <title>Colorlib Listed Directory Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- <link rel="stylesheet" href="resourses/css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand absolute" href="{{route('home')}}">Skwela</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto">

                        @foreach (App\Models\Navlink::all() as $navlink )
                        <li class="nav-item">
                            <a class="nav-link" href="{{route($navlink->link)}}">{{$navlink->name}}</a>
                        </li>
                        @endforeach

                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('course-page')}}">Courses</a>
                        </li> -->


                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown05">
                                <a class="dropdown-item" href="#">HTML</a>
                                <a class="dropdown-item" href="#">WordPress</a>
                                <a class="dropdown-item" href="#">Web Development</a>
                                <a class="dropdown-item" href="#">Javascript</a>
                                <a class="dropdown-item" href="#">Photoshop</a>
                            </div>

                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{route('blog-page')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about-page')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact-page')}}">Contact</a>
                        </li> -->
                    </ul>
                    @if (!auth()->check())
                    <ul class="navbar-nav absolute-right">
                        <li class="nav-item">
                            <a href="{{route('login-page')}}" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('register-page')}}" class="nav-link">Register</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav absolute-right">
                        <span class="nav-link">{{Auth::user()->name}}</span>

                        <a style="color: red;"  href="#" onclick="event.preventDefault(); document.getElementById('my-form').submit();" class="nav-link">logout</a>
                        <form id="my-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                    @endif

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    @yield('content')

    <footer class="site-footer" style="background-image: url(images/big_image_3.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde perferendis eum illum voluptatibus dolore tempora, consequatur minus asperiores temporibus reprehenderit.</p>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Categories</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Categories</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Teachers</a></li>
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Categories</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
        </svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>


    <script src="js/main.js"></script>
</body>

</html>