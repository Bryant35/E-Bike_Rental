<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/purhist.css">
    <title>Purchase History</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

<div class="container">
    <div class="my-4">
        <div class="card">
            <div class="card-header p-4 d-flex justify-content-between">
                <h2>Purchase History</h2>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Purchase History</a></li>
                        <li><a class="dropdown-item" href="#">Top Up History</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">All Transaction</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center ps-4">Invoice</th>
                                <th>Item</th>
                                <!-- <th>Booth</th> -->
                                <th class="right">Date Rent</th>
                                <th class="center">End Date</th>
                                <th class="right">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td class="center">SBS001/17092021/9</td>
                                <td class="left strong">Red Bike</td>
                                <!-- <td class="left">Iron Bike to Emerald Bike</td> -->
                                <td class="right">2021-09-17 03:47:05</td>
                                <td class="center">2021-09-17 03:47:05</td>
                                <td class="right">Rp 15,000</td>
                            </tr> --}}
                            @foreach($tampil_history as $history)
                                <tr>
                                    <td class="center ps-4">{{ $history->Invoice }}</td>
                                    <td class="left strong">{{ $history->TypeBike }}</td>
                                    <td class="right">{{ $history->DateRent }}</td>
                                    <td class="center">{{ $history->EndDate }}</td>
                                    <td class="right text-end pe-4">{{ $history->Price }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="center ps-4">Total Purchase</td>
                                <td class="left strong"></td>
                                <td class="right"></td>
                                <td class="center"></td>
                                <td class="right text-end pe-4">{{ $sum_purchase[0]->TotalPurchase }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p class="mb-0"> 123 Plae Grownd Street © 2021</p>
            </div>
        </div>
    </div>
</div>


 <div class="">
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
                        <a href="/"><img src="img/ebike_logo.png" alt="" class="img-thumbnail"></a>
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
                    <a class="shadow"><img src="img/Ovo.png" alt="" style="width: 40px;"></a>
                    <a class="shadow"><img src="img/Gopay.png" alt="" style="width: 40px;"></a>
                    <a class="shadow"><img src="img/Dana.png" alt="" style="width: 40px;"></a>
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
            <div class="text-center p-3 mt-2" style="background-color: rgba(0, 0, 0, 0.2)">
                123 Plae Grownd Street<br>© 2021
                <a class="text-white" href="http://127.0.0.1:8000/home">Ebike Rental</a>
                All rights reserved.
            </div>
            <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>

 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
