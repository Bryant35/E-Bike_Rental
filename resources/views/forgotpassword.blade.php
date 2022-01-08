<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/forgotpass.css">
    <link rel="stylesheet" href="css/login.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="" class="logo"><img src="img/ebike_logo.png" alt="" style="width: 60px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home" >Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Service</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{url('/order')}}">Order Bike</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('/topup')}}">Top-Up Wallet</a></li>
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
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

<!-- body -->
<div class="form-gap"></div>

{{-- <div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Forgot Password?</h2>
                        <p>Enter your email address and you will receive a link to reset your password.</p>
                        <div class="panel-body">

                            <form id="register-form" action="/getPassword" role="form" autocomplete="off" class="form" method="POST">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                    <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Get Password" type="submit">
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
          </div>
	</div>
</div> --}}

<div class="container">
    <div class="center position-absolute top-50 start-50 translate-middle">
        <h1>Forgot Account</h1>
        <p class="text-center">Enter your email address and<br> you will receive your account.</p>
        @if (Session::has('success'))
            <div class="alert alert-success alert-block mx-4" data-bs-toggle="modal" data-bs-target="#email-resend">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <strong>{{ Session::get('success') }}</strong>
                <strong>didn't recieve our email ? <a href="/resendPassword">Resend</a> email</strong>
            </div>

        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <strong>{{ Session::get('error') }}</strong>
            </div>
        @endif
        <form action="/getPassword" method="POST">
            @csrf
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email Address</label>
            </div>
            <input type="submit" value="Get Password">
            <div class="signup_link">
                Return to <a href="{{ url('/login') }}">Sign In</a> or make <a href="{{ url('/register') }}">New Account</a>
            </div>
        </form>
    </div>

</div>

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
