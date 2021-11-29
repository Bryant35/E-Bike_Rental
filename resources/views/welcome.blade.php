
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head
        <title>Laravel</title>
        <link rel="stylesheet" href="landpage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <body class="antialiased">
    <div class="topnav">
        <a href="#home">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="#portfolio">Portfolio</a>
    </div>
       

    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
                <div class="carousel-caption">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
                <div class="carousel-caption">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://source.unsplash.com/lHGeqh3XhRY/1920x1080')">
                <div class="carousel-caption">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
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
