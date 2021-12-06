<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blade.css">
    <title>Document</title>
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
<!--location -->
<section id ="locationsect"> 
    <label for="locations">Choose a Location</label>
    <div><select name="locations" id="location">
        <option value="a">a</option>
        <option value="b">b</option>
        <option value="c">c</option>
        <option value="d">d</option>
        <option value="e">e</option>
    </select>
    </div>
    <!--date and time-->
    <form id="datetime">
        <label for="pickuptime">Date and Time:</label>
        <input type="datetime-local" id="pickuptime"> 
      </form>
</section>


<!--bikepick-->
<!--location -->
<section id ="bikesect"> 
    <label for="Bikes">Choose your preferred bike.</label>
    <div><select name="Bikepick" id="bikepick">
        <option value="a">a</option>
        <option value="b">b</option>
        <option value="c">c</option>
        <option value="d">d</option>
        <option value="e">e</option>
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


</body>
</html>