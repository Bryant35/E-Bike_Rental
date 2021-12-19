<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <title>Order</title>
    
</head>
<body>
    <!--header-->
    <nav>
        <a href="#" class="logo"><img src="img/ebike_logo.png" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar" >
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
<!--location -->
<section id ="locationsect">
    <label for="locations">Choose a Location</label>
    <div><select name="locations" id="location">
        <option value="Iron">Iron Bikes</option>
        <option value="Emerald">Emerald Bikes</option>
        <option value="Gold">Gold Bikes</option>
        <option value="Ruby">Ruby Bikes</option>
    </select>

    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=pakuwon%20tower&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://2piratebay.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map html</a>
        </div></div>

    </div>
    <!--date and time-->
    <form id="datetime">
        <label for="pickuptime">Date and Time:</label>
        <input type="datetime-local" id="pickuptime">
      </form>

      <div id="map"></div>

      <a href="{{ url('/orderm') }}#"><button>Confirm</button></a>

<!--bikepick-->
<!--location -->

    <label for="Bikes">Choose your preferred bike.</label>
    <div><select name="Bikepick" id="bikepick">
        <option value="biru">Biru</option>
        <option value="hitam">Hitam</option>
        <option value="hijau">Hijau</option>
        <option value="jingga">Jingga</option>
        <option value="kuning">Kuning</option>
        <option value="merah">Merah</option>
        <option value="pink">Pink</option>
        <option value="ungu">Ungu</option>
    </select>
    </div>
 <!--footer-->
 <footer class="footer">
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
            <li>Sunday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 6AM - 9PM</li>
            <li><br></li>
            <li><br></li>
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
    </footer>
    <!-- Footer -->


    <!--jsreference-->

    <script src="js/orderpage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


</body>
</html>
