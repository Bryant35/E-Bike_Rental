<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/ourservice.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


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
                        <a class="nav-link active" aria-current="page" href="#" >Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Service</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{url('/order')}}">Order Bike</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('/topup')}}">Top-Up Wallet</a></li>
                          </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <a href="{{url('/account')}}"><img src="img/Avatar.png" alt="" style="height: 40px;"></a>
                    <button class="btn btn-light" type="submit">{{ session()->get('login') }}
                    </button>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#">Review</a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#">Review</a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#">Review</a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#">Review</a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#">Review</a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#">Review</a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#"></a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
                                        <h1>Tyre Mountain Cycle 21</h1>
                                    </div>
                                    <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                    <p class="text-right para">Based on 250 Review</p>
                                </div>
                            </div>
                            <div class="container-body mt-4">
                                <div class="row r3">
                                    <div class="col-md-5 p-0 klo">
                                        <div class="mx-5">
                                            <ul>
                                                <li>100% Quality</li>
                                                <li>Free Shipping</li>
                                                <li>Easy Returns</li>
                                                <li>12 Months Warranty</li>
                                                <li>EMI Starting from (On Credit Cards)</li>
                                                <li>Normal Delivery : 4-5 Days</li>
                                                <li>Express Delivery : 2-3 Days</li>
                                                <li>COD Available (All Over India)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                                </div>
                            </div>
                            <div class="footer d-flex flex-column mt-5">
                                <div class="row r4">
                                    <div class="col-md-2 myt des"><a href="#">Description</a></div>
                                    <div class="col-md-2 myt "><a href="#">Review</a></div>
                                    <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                                    <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
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
    {{-- <div class="container my-4 mx-auto">
        <div class="border border-primary border-5 rounded-3">
            <div class="mx-4 my-4">
                <div class="header">
                    <div class="row r1">
                        <div class="col-md-9 abc">
                            <h1>Tyre Mountain Cycle 21</h1>
                        </div>
                        <div class="col-md-3 text-right pqr"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                        <p class="text-right para">Based on 250 Review</p>
                    </div>
                </div>
                <div class="container-body mt-4">
                    <div class="row r3">
                        <div class="col-md-5 p-0 klo">
                            <ul>
                                <li>100% Quality</li>
                                <li>Free Shipping</li>
                                <li>Easy Returns</li>
                                <li>12 Months Warranty</li>
                                <li>EMI Starting from (On Credit Cards)</li>
                                <li>Normal Delivery : 4-5 Days</li>
                                <li>Express Delivery : 2-3 Days</li>
                                <li>COD Available (All Over India)</li>
                            </ul>
                        </div>
                        <div class="col-md-7"> <img src="https://assetscdn1.paytm.com/images/catalog/product/K/KI/KIDTORADO-MUSCUTORA65799297FD22C/1564571511644_0.jpg" width="90%" height="95%"> </div>
                    </div>
                </div>
                <div class="footer d-flex flex-column mt-5">
                    <div class="row r4">
                        <div class="col-md-2 myt des"><a href="#">Description</a></div>
                        <div class="col-md-2 myt "><a href="#">Review</a></div>
                        <div class="col-md-2 mio offset-md-4"><a href="#">ADD TO CART</a></div>
                        <div class="col-md-2 myt "><button type="button" class="btn btn-outline-warning"><a href="#">BUY NOW</a></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


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
