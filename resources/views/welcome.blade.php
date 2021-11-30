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
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Login dropdown</a>
            </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text">Already have an account?</p></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        Login via
                                        <div class="social-buttons">
                                            <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                            <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                        </div>
                                        or
                                        <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                    <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                    <input type="checkbox"> keep me logged-in
                                                    </label>
                                                </div>
                                        </form>
                                    </div>
                                    <div class="bottom text-center">
                                        New here ? <a href="#"><b>Join Us</b></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
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
