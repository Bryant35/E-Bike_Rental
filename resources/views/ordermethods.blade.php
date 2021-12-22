<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/ordermethods.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
            <a href="{{ url('/login') }}" class="log-in">Log In</a>
            <a href="#register" class="register">Register</a>
        </div>
    </nav>


    <!--payment method-->
    <section id ="paymeth">
    <label for="pay">Payment Method</label>
    <div><select name="pay" id="payment">
        <option value="dana">Dana</option>
        <option value="ovo">OVO</option>
        <option value="gopay">Gopay</option>
        <option value="cos">Cash</option>
    </select>
    </div>

    
    <!--duit mas duit-->
    <form>
        <label for="inputduit">Amount</label><br>
        <input type="text" id="duitamount" name="inputduit">
    </form>
    <!--oh no... TAXES!!!-->
    <form>
        <label for="taxes">Taxes</label><br>
        <input type="text" id="taxamount" name="taxes">
    </form>
    <!--confirmbutton-->
    <div>
        <button type="button" id="butconf">Confirm</button>
    </div>
    </section>


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

