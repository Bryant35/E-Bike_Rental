<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/orderpage.css">
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
                        <a class="nav-link active" aria-current="page" href="#" >Home</a>
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

                <form class="d-flex">
                    <a href="{{url('/account')}}"><img src="img/Avatar.png" alt="" style="height: 50px;"></a>
                    <button class="btn btn-light" type="submit">Nama</button>
                    <a href="{{url('/')}}" onclick="logOut()"><button class="btn btn-primary" type="submit">Log Out</button></a>
                    <script>
                        function logOut() {
                            if (confirm("Press a button!")) {
                                location.href = "http://127.0.0.1:8000/";
                            }
                        }
                    </script>
                </form>
            </div>
        </div>
    </nav>




    <!--location -->
<section id ="locationsect">
    <label for="locations">Choose a Location</label>


    
    <form action="{{url('/order')}}" method="get" id="formorder">
        @csrf
    <div><select name="location" id="location" onchange="map()">
            <option value="Iron">Iron Bikes</option>
            <option value="Emerald">Emerald Bikes</option>
            <option value="Gold">Gold Bikes</option>
            <option value="Ruby">Ruby Bikes</option>
        </select>
                    


    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="600" height="500"name="gmap" id="gmap" src="https://maps.google.com/maps?q=pakuwon%20tower&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>

    <!--date and time-->

        <label  for="pickuptime">Date and Time:</label>
        <input name="inputmap" type="datetime-local" id="pickuptime">
  

      <div id="map"></div>

      

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
    </form>

   <button type="submit" id="confirmbut" onclick="holder()">Confirm</button>
</section>



    {{-- Footer --}}
    <div class="my-5">
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
            123 Plae Grownd Street<br>© 2021
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
