<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Bike Rental Website</title>
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/landingpage.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--For Footer-->
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
                        <a class="nav-link active" aria-current="page" href="#" >Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link disabled" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Service</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{url('/order')}}">Order Bike</a></li>
                            <li><a class="dropdown-item" href="{{url('/topup')}}">Top-Up Wallet</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
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


    <!--home-->


    <div class="banner">
        <img src="img/bgpage.png" alt="img">
        <h2 class="heading">Welcome<br>Quick Access E-bike Rental Platform</h2>
        <h2 class="buttonrent"><a href="{{ url('/order') }}#"  class="rent" style="font-size: 45%">RENT NOW</a></h2>
    </div>

    <!--how to rent bek-->

    <div><h1 class="howtop">HOW TO RENT OUR BIKE</h1></div>

    <div class ="howto" >
        <div class="howtopics">
            <img class="ONE" src="img/one.png"  alt="">
            <p class="ONEp1">FIND THE PERFECT LOCATION AND BIKE(S)</p>
            <div><p class="ONEpsmall">CHOOSE BIKE RENTAL LOCATIONS, PRICES, BIKE VARIANTS. EVERYTHING IN ONE PLACE!</p></div>
        </div>

        <div class="howtopics">
            <img class="ONE" src="img/two.png"  alt="">
            <p class="ONEp1">RENT YOUR BIKE!</p>
            <div><p class="ONEpsmall">AFTER CHOOSING YOUR LOCATION AND BIKE, OUR WEBSITE WILL GUIDE YOU RENT OUR BIKES.</p></div>
        </div>


    </div>
    <div class="howto">
        <div class="howtopics">
            <img class="ONE" src="img/three.png"  alt="">
            <p class="ONEp1">THE BIKE IS READY TO GO!</p>
            <div><p class="ONEpsmall">YOU WILL BE ABLE TO ENJOY YOUR RIDE</p></div>
        </div>
        <br>
    </div>
    <br>
    <div class="position-absolute start-50 translate-middle">
        <h2 class="align-content-center"><a href="{{ url('/login') }}" class="btn btn-primary">RENT NOW</a></h2>
    </div>
    <br>
    <br>

    <!--Best Place For your Holdiday-->
    <div class="holiday">
        <div class="container">
            <div class="holiday-text">
                <div style="text-align:center">
                    <h1 style="color: black;">Best Place for Your <span>Holiday</span></h1>
                </div>
                <br>
            </div>
            <div class="wrapper">
                <div class="box"><img src="img/gwk.png" alt=""></div>
                <!--<div class="top-left">GWK</div>-->

                <div class="box"><img src="img/pantai_kuta.png" alt=""></div>
                <!--<div class="top-left1">Pantai Kuta</div>-->

                <div class="box"><img src="img/beach_walk.png" alt=""></div>
                <!--<div class="top-left2">Beachwalk Mall</div>-->

                <div class="box"><img src="img/pakuwon.png" alt=""></div>
                <!--<div class="top-left3">Pakuwon Mall</div>-->

                <div class="box"><img src="img/UC.png" alt=""></div>
                <!--<div class="top-left4">Universitas Ciputra</div>-->

                <div class="box"><img src="img/TP.png" alt=""></div>
                <!--<div class="top-left5">Tunjungan plaza</div>-->
            </div>
        </div>
    </div>

    <div class="rounded-circle">
        <div class="fixed-bottom float-end">
            <button class="btn btn-primary" onclick="topFunction()" id="myBtn" title="Go to top">^</button>
        </div>
    </div>

    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
        <!-- Footer -->
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
                        <a href="/"><img src="img/ebike_logo.png" alt="" class="img-thumbnail"></a>
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
                    <p>
                        <li><img src="OVO.png" alt="" style="width: 15px;"></li>
                        <li><img src="GoPay.png" alt="" style="width: 15px;"></li>
                        <li><img src="dana.png" alt="" style="width: 15px;"></li>
                    </p>
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
    <!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
