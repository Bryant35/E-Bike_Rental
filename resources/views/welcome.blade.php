<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="public/css/landpage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>     
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css"/>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>

        
    </head>
    <body class="antialiased">
    <div class="topnav">
        <img src= "">
        <a class = "headerbutton" href="">Home</a>
        <a class = "headerbutton" href="">Contact</a>
        <a class = "headerbutton" href="">About</a>
        <a class = "headerbutton" href="">Portfolio</a>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>
        <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2">Login</button>
        <button type="button" class="btn btn-warning">Sign-up</button>
        </div>
    </div>
       
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
