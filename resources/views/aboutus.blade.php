<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/aboutus.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>About Us</title>
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
                        <a class="nav-link active" aria-current="page" href="{{url('/homee')}}" >Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Service</a>
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
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col" >

                <p class="aboutus">About Us</p>
                <div><p class="isiabout">Ebike rental is trusted by people as the number one place in Indonesia to rent an ebike. Now we have more than 200 outlets all over Indonesia. You are going on holidays and would like to rent your bike beforehand? you can make sure that the bike of your choice will be available and ready for you upon arrival. When you book with our ebike rental, we get you in contact with rental point from more than 80 different countries across the globe, making sure that your bike rental experience os optimal. If you have any questions about your booking, to have more information, we are more than happy to help you, feel free to contact us</p></div>

            </div>
            <div class="col" >
                <p class="aboutus">All Location</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6060211110494!2d112.62941291383262!3d-7.28558719474143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fde455555555%3A0xd7e2611ae591f046!2sUniversitas%20Ciputra%20Surabaya!5e0!3m2!1sid!2sid!4v1639975705211!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--footer-->
{{-- Footer --}}
    {{-- <div class="my-5"> --}}
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
                    <a href="/home"><img src="img/ebike_logo.png" alt="" class="img-thumbnail"></a>
                </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Menu</h6>
                <p>
                    <a class="text-white" href="{{url('/aboutus')}}">About Us</a>
                </p>
                <p>
                    <a class="text-white" href="{{url('/contact')}}">Contact us</a>
                </p>
                <p>
                    <a class="text-white">Payment Method</a>
                </p>
                <p>
                    <li><img src="OVO.png" alt="" style="width: 10px;"></li>
                    <li><img src="GoPay.png" alt="" style="width: 10px;"></li>
                    <li><img src="dana.png" alt="" style="width: 10px;"></li>
                </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                    <!-- Facebook -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #3b5998"
                        href="#!"
                        role="button"
                        ><i class="fab fa-facebook-f"></i
                        ></a>

                    <!-- Twitter -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #55acee"
                        href="#!"
                        role="button"
                        ><i class="fab fa-twitter"></i
                        ></a>

                    <!-- Google -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #dd4b39"
                        href="#!"
                        role="button"
                        ><i class="fab fa-google"></i
                        ></a>

                    <!-- Instagram -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #ac2bac"
                        href="#!"
                        role="button"
                        ><i class="fab fa-instagram"></i
                        ></a>

                    <!-- Linkedin -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #0082ca"
                        href="#!"
                        role="button"
                        ><i class="fab fa-linkedin-in"></i
                        ></a>
                    <!-- Github -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #333333"
                        href="#!"
                        role="button"
                        ><i class="fab fa-github"></i
                        ></a>
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
            <a class="text-white" href="http://127.0.0.1:8000">Ebike Rental</a>
            All rights reserved.
        </div>
        <!-- Copyright -->
    </footer>
        <!-- Footer -->
    {{-- </div> --}}
    <!-- End of .container -->
    <!-- Footer -->
</body>
</html>
