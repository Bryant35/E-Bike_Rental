<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ordersummary.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Order</title>
    <script src="js/ordersummary.js"></script>

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



    <section id= "transucc" >
    <h1>TRANSACTION SUCCESS!</h1>
    <p>Transaction Code     : {{Session::get('idtrans')}}</p>
    <p>Transaction Amount   : {{Session::get('total')}}</p>
    <p>Payment Method       : {{Session::get('method')}}</p>
    <p>Pickup Location      : {{Session::get('location')}} </p>
    </section>

 <!--footer-->
 <div class="mt-4">
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #2a9df4">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
        <!--Grid row-->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
                Ebike Rental
            </h6>
            <p>
                <a href="/home"><img src="img/ebike_logo.png" alt="" class="img-thumbnail"></a>
            </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
            <p>
                <a class="text-white" href="{{url('/aboutus')}}" style="text-decoration: none;">About Us</a>
            </p>
            <p>
                <a class="text-white" href="{{url('/contact')}}" style="text-decoration: none;">Contact us</a>
            </p>
            <p class="text-white">
                Payment Method
            </p>
            <a><img src="img/Ovo.png" alt="" style="width: 40px;"></a>
            <a><img src="img/Gopay.png" alt="" style="width: 40px;"></a>
            <a><img src="img/Dana.png" alt="" style="width: 40px;"></a>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="fas fa-home mr-3"></i>Surabaya, East Java</p>
                <p><i class="fas fa-envelope mr-3"></i> ebike@gmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> +62812 3456 7890</p>
                <p><i class="fas fa-print mr-3"></i> +62809 8765 4321</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                <!-- Facebook -->
                <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #3b5998"
                    href="https://www.facebook.com"
                    role="button"
                    ><img src="img/Fb.png" alt="" style="width: 30px;"></a>

                <!-- Twitter -->
                <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #55acee"
                    href="https://www.twitter.com/"
                    role="button"
                    ><img src="img/Twitter.png" alt="" style="width: 30px;"></a>

                <!-- Instagram -->
                <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #ac2bac"
                    href="https://www.instagram.com"
                    role="button"
                    ><img src="img/ig.png" alt="" style="width: 30px;"></i
                    ></a>

                <!-- Github -->
                <a
                    class="btn btn-primary btn-floating m-1"
                    style="background-color: #333333"
                    href="https://www.tiktok.com/"
                    role="button"
                    ><img src="img/TikTok.png" alt="" style="width: 30px;"></a>
            </div>
        </div>
        <!--Grid row-->
        </section>
        <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        123 Plae Grownd Street<br>© 2021
        <a class="text-white" href="http://127.0.0.1:8000/home">Ebike Rental</a>
        All rights reserved.
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
