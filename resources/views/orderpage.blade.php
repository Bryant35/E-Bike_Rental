<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderpage.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/homepage.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Order</title>

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
                        <a class="nav-link active" aria-current="page" href="/home" >Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Service</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{url('/order')}}">Order Bike</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('/topup')}}">Top-Up Wallet</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('/service')}}">Our Product</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/wishlist">Wishlist</a></li>
                          </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <a href="{{url('/topup')}}" class="btn btn-info rounded-pill">Rp. {{ session()->get('saldo') }}</a>
                    <a href="{{url('/account')}}"><img src="img/Avatar.png" alt="" style="height: 40px;"></a>
                    <button class="btn btn-light" type="submit">{{ session()->get('login') }}</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmLogout">
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="confirmLogout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log Out ?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure going to log out ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"><a href="{{url('/logout')}}" style="text-decoration: none; color: #fff">Log Out</a></button>
                </div>
            </div>
        </div>
    </div>





    <!--location -->
    <div class="bg-info h-100 w-100">
    @if (session('success'))
    <div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    {{Session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>
    @endif

    <div class="container container-lg">
        <p class="text-end" id="timenow"></p>
    <section id ="locationsect">
    <label class="fs-3"for="locations">Choose a Location</label>

    <form action="{{url('/order/method')}}" method="get" id="formorder">
        @csrf
        <div><select class="fs-2" name="location" id="location" onchange="map()">
                <option value="Iron">Iron Bikes</option>
                <option value="Emerald">Emerald Bikes</option>
                <option value="Gold">Gold Bikes</option>
                <option value="Ruby">Ruby Bikes</option>
            </select>
        </div>


<div class="container" >
    <div class="mapouter">
    <div class="row">
        <div class="gmap_canvas col">
            <iframe width="600" height="500"name="gmap" id="gmap" src="https://maps.google.com/maps?q=pakuwon%20mall%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
        <!--date and time-->
    <div class = "col d-flex flex-column justify-content-around">
        <div>
        <label  class="fs-3" for="pickuptime">Start Date and Time:</label>
        <input name="inputmap" type="datetime-local" id="pickuptime">
        </div>
        <div>
        <label  class="fs-3" for="dropofftime">Finish Date and Time:</label>
        <input name="inputlast" type="datetime-local" id="dropofftime">
        </div>
        </div>

    </div>
</div>



<!--bikepick-->
<!--location -->
<div class="mt-5">
    <label class="fs-3"for="Bikes">Choose your preferred bike.</label>
    <div><select class="form-select fs-2" onchange="bike()"name="Bikepick" id="bikepick">
            <option value="biru">Blue</option>
            <option value="hitam">Black</option>
            <option value="hijau">Green</option>
            <option value="jingga">Orange</option>
            <option value="kuning">Yellow</option>
            <option value="merah">Red</option>
            <option value="pink">Pink</option>
            <option value="ungu">Purple</option>
        </select>
    </div>
    </div>
    <div id="bikeborder" class="d-flex flex-column align-items-center mt-5">
        <img class="img-thumbnail bg-black mt-4" id="bikeimg" src="img/bluebike.jpg" alt="">

    <button class="btn btn-primary mt-4  "type="submit" id="confirmbut" >Confirm</button>
    </div>
    </form>
    </section>
    </div>
    </div>
            </div>

    {{-- Footer --}}
    <div>
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
                    <a class="text-white" href="{{url('/aboutus')}}" style="text-decoration: none;">About Us</a>
                </p>
                <p>
                    <a class="text-white" href="{{url('/contact')}}" style="text-decoration: none;">Contact us</a>
                </p>
                <p class="text-white">
                    Payment Method
                </p>
                <p>
                    <li><img src="OVO.png" alt="" style="width: 15px;"></li>
                    <li><img src="GoPay.png" alt="" style="width: 15px;"></li>
                    <li><img src="dana.png" alt="" style="width: 15px;"></li>
                </p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p><i class="fas fa-home mr-3"></i>Surabaya, East Java</p>
                    <p><i class="fas fa-envelope mr-3"></i> ebike@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +62812 3456 7890</p>
                    <p><i class="fas fa-print mr-3"></i> +62809 8765 4321</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                    <!-- Facebook -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #3b5998"
                        href="https://www.facebook.com"
                        role="button"
                        ><img src="img/Fb.png" alt="" style="width: 30px;"></a>

                    <!-- Twitter -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #55acee"
                        href="https://www.twitter.com/"
                        role="button"
                        ><img src="img/Twitter.png" alt="" style="width: 30px;"></a>

                    <!-- Instagram -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #ac2bac"
                        href="https://www.instagram.com"
                        role="button"
                        ><img src="img/ig.png" alt="" style="width: 30px;"></i
                        ></a>

                    <!-- Github -->
                    <a
                        class="btn btn-primary btn-floating m-1"
                        style="background-color: #333333"
                        href="https://www.tiktok.com/"
                        role="button"
                        ><img src="img/TikTok.png" alt="" style="width: 30px;"></a>
                </div>
            </div>
            <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            123 Plae Grownd Street<br>?? 2021
            <a class="text-white" href="http://127.0.0.1:8000/home">Ebike Rental</a>
            All rights reserved.
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
    <!-- End of .container -->


    <!--jsreference-->

    <script src="js/orderpage.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
</html>
