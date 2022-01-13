<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/ourservice.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<!-- navbar -->
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

    <!-- end navbar -->

    <!-- product detail -->
    <div class="container mt-5">
        @if (Session::has('error'))
            <div class="alert alert-danger alert-block">
                <strong>{{ Session::get('error') }}</strong>
                <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button>
            </div>
        @endif
    </div>
    <div class="container my-4 mx-auto">
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner"><!--Slide 1-->
                <div class="carousel-item active">
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Purple E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                        <div class="col-md-4 me-5"> <img src="img/purplebike.png" width="110%" height="110%"></div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="U001">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"><!--Slide 2-->
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Pink E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4"> <img src="img/pinkbike.png" width="100%" height="100%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="P001">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"><!--Slide 3-->
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Red E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4"> <img src="img/redbike.png" width="110%" height="110%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="M001">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"><!--Slide 4-->
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Yellow E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4"> <img src="img/yellowbike.png" width="100%" height="100%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="K001">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"><!--Slide 5-->
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Orange E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4"> <img src="img/orangebike.png" width="100%" height="100%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="J001">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"><!--Slide 6-->
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Green E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4"> <img src="img/greenbike.png" width="100%" height="100%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="H002">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"><!--Slide 7-->
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Black E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4"> <img src="img/blackbike.png" width="100%" height="100%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="H001">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item"><!--Slide 8-->
                    <div class="border border-primary border-5 rounded-3">
                        <div class="mx-5 my-4">
                            <div class="header">
                                <div class="row r1">
                                    <div class="col-md-9 abc">
                                        <h1>Blue E-Bike</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p><div class="col-md-2 myt des"><a href="#">Description</a></div></p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Easy Returns</li>
                                                <li>Easy Pay</li>
                                                <li>Performance: powerful, dynamic and silent</li>
                                                <li>Strong rear-wheel motor up to 45 km/h</li>
                                                <li>Comfortable riding position</li>
                                                <li>Integrated design</li>
                                                <li>Battery ejection at the push of a button</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4"> <img src="img/bluebike.png" width="100%" height="100%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5 ms-5 d-flex justify-content-evenly">
                                <div class="row r4 position-absolute end-0">
                                    <form action="{{url('/addwish')}}" method="POST">
                                        @csrf
                                        <div class="mb-5">
                                            <div class="btn-group mb-5" role="group" aria-label="Basic example" style="margin-right: 200px;">
                                                <button type="submit" class="btn btn-danger" style="width: 200px">
                                                        <input name="biketype" type="hidden" value="B001">
                                                        Add to Wishlist
                                                        <input name="idpenyewa"type="hidden" value="{{session()->get('IDpenyewa')}}">
                                                </button>
                                                <a href="{{ url('/order') }}" class="btn btn-outline-warning" style="vertical-align: middle;">RENT NOW</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="mt-4">
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
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            123 Plae Grownd Street<br>© 2021
            <a class="text-white" href="http://127.0.0.1:8000/home">Ebike Rental</a>
            All rights reserved.
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
<!-- end product -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
