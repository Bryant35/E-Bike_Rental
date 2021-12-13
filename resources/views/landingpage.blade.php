<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Bike Rental Website</title>
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/landingpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!--For Footer-->
</head>
<body>

    <!--header-->
    <nav>
        <a href="#" class="logo"><img src="img/ebike_logo.png" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#ourservice">Our Service</a></li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
        <div class="nav-btn">
            <a href="{{ url('/login') }}" class="log-in">Log In</a>
            <a href="{{ url('/signup') }}" class="register">Register</a>
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

        <div class="howtopics">
            <img class="ONE" src="img/three.png"  alt="">
            <p class="ONEp1">THE BIKE IS READY TO GO!</p>
            <div><p class="ONEpsmall">YOU WILL BE ABLE TO ENJOY YOUR RIDE</p></div>
        </div>
        <br>
    </div>
    <div class="howtobtn" style="align-items: center;">
        <h2 class="buttonrent2"><a href="{{ url('/order') }}"  class="rent2" style="font-size: 0.7vw">RENT NOW</a></h2>
    </div>
    <br>
    <br>

    <!--Best Place For your Holdiday-->
    <div class="holiday">
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


    <!--footer-->
    {{-- <footer class="footer">
        <section class="logof">
            <img src="img/ebike_logo.png" class="foot">
        </section>
        <section class="menuf">
            <li><a href="#" class="aboutusf">About Us</a></li>
            <li><a href="#" class="contactusf">Contact Us</a></li>
            <li>Payment Method</li>
            <li><a href="#" class="ovo"><img src="img/OVO.png"></a>
            <a href="#" class="gopay"><img src="img/GoPay.png"></a>
            <a href="#" class="dana"><img src="img/dana.png"></a></li>
        </section>
        <section class="Hour">
            <li><h2>Operational Hour</h2></li>
            <li><br></li>
            <li>Monday-Saturday: 6AM - 6PM</li>
            <li>Sunday: 6AM - 9PM</li>
        </section>
        <section class="SosMed">
            <li><h2>Follow Us</h2></li>
            <li><br></li>
            <li class="logos">
                <a href="#" class="Fb"><img src="img/Fb.png"></a>
                <a href="#" class="ig"><img src="img/ig.png"></a>
                <a href="#" class="tiktok"><img src="img/TikTok.png"></a>
            </li>
            <li><br></li>
        </section>
        <!-- Copyrights -->
        <div class="copyrights">
            <p>
            123 Plae Grownd Street<br>
            © 2021 E-Bike Rental All rights reserved.</p>
        </div>
    </footer> --}}
    <!-- Footer -->
    <div class="footer-container">
        <div class="grid-logo">
            <img src="img/ebike_logo.png" alt="" style="width: 7vw">
        </div>
        <div class="grid-menu-footer">
            <li><a href="#" class="aboutusf">About Us</a></li>
            <li><a href="#" class="contactusf">Contact Us</a></li>
            <li>Payment Method</li>
            <li><a href="#" class="ovo"><img src="img/OVO.png" style="width: 2vw"></a>
            <a href="#" class="gopay"><img src="img/GoPay.png" style="width: 2vw"></a>
            <a href="#" class="dana"><img src="img/dana.png" style="width: 2vw"></a></li>
        </div>
        <div class="grid-hour">
            <li>Operational Hour</li>
            <li><br></li>
            <li>Monday-Saturday: 6AM - 6PM</li>
            <li>Sunday: 6AM - 9PM</li>
        </div>
        <div class="grid-sosmed">
            <li>Follow Us</li>
            <li><br></li>
            <li class="logos">
                <a href="#" class="Fb"><img src="img/Fb.png" style="width: 2vw"></a>
                <a href="#" class="ig"><img src="img/ig.png" style="width: 2vw"></a>
                <a href="#" class="tiktok"><img src="img/TikTok.png" style="width: 2vw"></a>
            </li>
        </div>
    </div>
    <!-- Copyrights -->
    <div class="copyrights">
        <p style="text-align: center;">
        123 Plae Grownd Street<br>
        © 2021 E-Bike Rental All rights reserved.</p>
    </div>
</body>

</html>
