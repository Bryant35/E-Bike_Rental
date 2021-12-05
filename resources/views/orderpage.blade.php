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

</body>
</html>