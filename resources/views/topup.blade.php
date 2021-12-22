<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/topup.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Top Up - Ebike Rentals</title>
</head>
<body>
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
                            {{-- <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
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
                    <a href="{{url('/account')}}"><img src="img/Avatar.png" alt="" style="height: 40px;"></a>
                    <button class="btn btn-light" type="submit">{{ session()->get('login') }}</button>
                    <a href="{{url('/')}}" class="btn btn-primary">Log Out</a>
                </form>
            </div>
        </div>
    </nav>

    {{-- Topup --}}
    <div class="container">

        <div class="text-center"><h1>Top Up Wallet</h1></div>
        <p></p>
        <div class="row gap-3">
            <div class="col border border-primary border-3 rounded-3 text-dark d-grid gap-3">
                <div class="row">
                    <div class="col d-grid gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="10k" checked>
                            <label class="form-check-label" for="10k">
                                Rp.10000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="20k">
                            <label class="form-check-label" for="20k">
                                Rp.20000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="25k">
                            <label class="form-check-label" for="25k">
                                Rp.25000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="30k">
                            <label class="form-check-label" for="30k">
                                Rp.30000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="50k">
                            <label class="form-check-label" for="50k">
                                Rp.50000
                            </label>
                        </div>
                    </div>
                    <div class="col d-grid gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="75k" checked>
                            <label class="form-check-label" for="75k">
                                Rp.75000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="100k">
                            <label class="form-check-label" for="100k">
                                Rp.100000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="125k">
                            <label class="form-check-label" for="125k">
                                Rp.125000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="150k">
                            <label class="form-check-label" for="150k">
                                Rp.150000
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="nominal" id="200k">
                            <label class="form-check-label" for="200k">
                                Rp.200000
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col border border-primary border-3 rounded-3 text-dark d-grid gap-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="method" id="dana" checked>
                    <img src="img/dana.png" alt="" style="width: 20px;">
                    <label class="form-check-label" for="dana">
                        Dana
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="method" id="ovo">
                    <img src="img/OVO.png" alt="" style="width: 20px;">
                    <label class="form-check-label" for="ovo">
                        OVO
                    </label>
                </div>
                <div class="form-check">
                    <img src="img/GoPay.png" alt="" style="width: 20px;">
                    <input class="form-check-input" type="radio" name="method" id="gopay">
                    <label class="form-check-label" for="gopay">
                        Gopay
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="method" id="bank">
                    <label class="form-check-label" for="bank">
                        Bank
                    </label>
                </div>
                <div class="position-relative">
                    <div class="position-absolute bottom-0 end-0">
                        <button type="button" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                123 Plae Grownd Street<br>© 2021
                <a class="text-white" href="http://127.0.0.1:8000/home">Ebike Rental</a>
                All rights reserved.
            </div>
            <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
  <!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
