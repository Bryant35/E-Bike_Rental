<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>Login</title>
</head>
<body>
    <!--header-->
    <nav>
        <a href="#" class="logo"><img src="img/ebike_logo.png" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#ourservice">Our Service</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <div class="nav-btn">
            <a href="login.php" class="log-in">Log In</a>
            <a href="#register" class="register">Register</a>
        </div>
    </nav>
    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6> <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" /> <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group"> <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                            <div class="form-group mt-2"> <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off"> <i class="input-icon uil uil-lock-alt"></i> </div> <a href="#" class="btn mt-4">submit</a>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Sign Up</h4>
                                            <div class="form-group"> <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off"> <i class="input-icon uil uil-user"></i> </div>
                                            <div class="form-group mt-2"> <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off"> <i class="input-icon uil uil-at"></i> </div>
                                            <div class="form-group mt-2"> <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off"> <i class="input-icon uil uil-lock-alt"></i> </div> <a href="#" class="btn mt-4">submit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>