<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="" class="logo"><img src="img/ebike_logo.png" alt="" style="width: 60px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" >Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Service</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{url('/order')}}">Order Bike</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('/topup')}}">Top-Up Wallet</a></li>
                          </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <a href="{{url('/signup')}}" class="btn btn-light" style="text-decoration: none; color: #000">Register</a>
                    <a href="{{url('/login')}}" class="btn btn-primary" style="text-decoration: none; color: white">Log In</a>
                </form>
            </div>
        </div>
    </nav>


    <div class="center">
        <h1>Login</h1>
        @if (Session::has('success'))
            <div class="alert alert-success alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <strong>{{ Session::get('error') }}</strong>
            </div>
        @endif
        @if (Session::has('keluar'))
            <div class="alert alert-warning alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <strong>{{ Session::get('keluar') }}</strong>
            </div>
        @endif
        <form action="{{ url('/signin')}}" method="POST">
            @csrf
            <div class="txt_field">
                <input type="text" name="uname" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass" href="{{ url('/forgotpassword') }}"><a href="{{ url('/forgotpassword') }}">Forgot Password?</a></div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Don't have an account? <a href="{{ url('/signup') }}">Sign Up</a>
            </div>
        </form>
    </div>
</body>
</html>
