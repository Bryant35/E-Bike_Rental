<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    {{-- <link rel="stylesheet" href="css/signuppage.css"> --}}
    <link rel="stylesheet" href="css/register2.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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

    <div class="center" style="max-height= 10vh;">
        <h1>Register</h1>
        @if (Session::has('emptydata'))
            <div class="alert alert-danger alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <strong>{{ Session::get('emptydata') }}</strong>
            </div>
        @endif
        @if (Session::has('usernameUsed'))
            <div class="alert alert-warning alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <ul>
                    <?php
                        $list_msg = Session::get('usernameUsed');
                        foreach($list_msg as $msg){
                            echo "<li>".$msg."</li>";
                        }
                    ?>
            </div>
        @endif
        <form action="{{ url('/insert')}}" method="POST">
            @csrf
            <div class="txt_field">
                <input type="text" name="f_name" required>
                <span></span>
                <label>First Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="l_name" required>
                <span></span>
                <label>Last Name</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email Address</label>
            </div>
            <div class="txt_field">
                <input type="number" name="phone" required>
                <span></span>
                <label>Phone Number</label>
            </div>
            <div class="txt_field">
                <input type="text" name="address" required>
                <span></span>
                <label>Address</label>
            </div>
            <div class="txt_field">
                <input type="text" name="uname" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Register">
            <div class="signup_link">
                Already have an account? <a href="{{ url('/login') }}">Log In</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
