<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/landpage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>

    </head>
    
    <body class="antialiased">
    <!--
    <div class="topnav">
        <img src= "">
        <a class = "headerbutton" href="">Home</a>
        <a class = "headerbutton" href="">Contact</a>
        <a class = "headerbutton" href="">About</a>
        <a class = "headerbutton" href="">Portfolio</a>
    </div> -->
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-danger">11</span>
                        </i>
                        Link
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-warning">11</span>
                        </i>
                        Disabled
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-primary">11</span>
                        </i>
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell">
                            <span class="badge badge-info">11</span>
                        </i>
                        Test
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-globe">
                            <span class="badge badge-success">11</span>
                        </i>
                        Test
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    
    <header>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2015/05/31/10/51/technology-791029_960_720.jpg" alt="">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line"></div>
                            <h2>Reinvent Business Experience with</h2>
                            <h1>Our Global and Integrated Solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into business</h4>
                        </div>
                    </div>
                </div>
            </div>                    
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2017/10/17/19/11/fantasy-2861815_960_720.jpg" alt="">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h2>Reinvent Digital Experience with</h2>
                            <h1>Our Digital and Intelligent Solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their dreams into profits</h4>
                        </div>
                    </div>
                </div>
            </div>                
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2017/07/17/23/51/wormhole-2514312_960_720.jpg" alt="">
                <div class="cover">
                    <div class="container">
                        <div class="header-content">
                            <div class="line animated bounceInLeft"></div>
                            <h2>Reinvent Client Experience with</h2>
                            <h1>Our CRM and Software Solutions</h1>
                            <h4>We help entrepreneurs, start-ups and enterprises shape their leads into clients</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    


    <footer>
        <div class="footer-content">
            <h3>follow Me On:</h3>
            <ul class="socials">
              <li><a href="#facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#instagram"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#youtube"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#whatsapp"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
            <p>Mari Membangun Relasi Bersama</p>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2021</p>
        </div>
    </footer>
    </body>
</html>
