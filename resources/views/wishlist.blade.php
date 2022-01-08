<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Bike Rental Website</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/wishlist.css">
    <script src="js/completetopup.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0536dc862a.js" crossorigin="anonymous"></script>
    <!--For Footer-->
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
                            <li><a class="dropdown-item" href="#wishlist">Wishlist</a></li>
                            <li><a class="dropdown-item" href="{{url('/topup')}}">Top-Up Wallet</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('/service')}}">Something Else</a></li>

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



    <!--home-->
    <div class="container">
        <div class= "col-sm-4 col-md-2" >
            <div class="products">
                <img src="img/greenbike.png" width="175px" height="200px" />
                <h4 class="text-info">Contoh 1 Ebike</h4>
                <h4>Rp. 5000/jam</h4>
                <button class="btn-outline-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 15">
                         ::before
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                </button>
                <button type="button" class="btn btn-primary">Check Out Now</button>

            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100" style="max-width: 16rem; background-color: #f1f1f1;">
                    <img src="img/purplebike.png" class="card-img-top card-header" alt="img/purplebike.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Contoh EBike 2</h5>
                        <p class="card-text">Rp. 5000/jam</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="text-end">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-danger p-2 bd-highlight" onclick="likePress()">
                                    <i class="fas fa-heart" id="love"></i>
                                </button>
                                <button type="button" class="btn btn-primary">Check Out Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="max-width: 16rem; background-color: #f1f1f1;">
                    <img src="img/redbike.png" class="card-img-top card-header" alt="img/redbike.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Contoh EBike 3</h5>
                        <p class="card-text">Rp. 5000/jam</p>
                    </div>
                    <div class="card-footer bg-transparent d-flex bd-highlight">
                        <button class="btn btn-danger p-2 bd-highlight">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 15">
                                ::before
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-primary ms-auto p-2 bd-highlight">Check Out Now</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="max-width: 16rem; background-color: #f1f1f1;">
                    <img src="img/orangebike.png" class="card-img-top" alt="img/orangebike.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Contoh Ebike 4</h5>
                        <p class="card-text">Rp. 5000/jam</p>
                    </div>
                    <div class="card-footer bg-transparent d-flex bd-highlight">
                        <button class="btn btn-danger p-2 bd-highlight">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 15">
                                ::before
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-primary ms-auto p-2 bd-highlight">Check Out Now</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100" style="max-width: 16rem; background-color: #f1f1f1;">
                    <img src="img/blackbike.png" class="card-img-top" alt="img/blackbike.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Contoh Ebike 5</h5>
                        <p class="card-text">Rp. 5000/jam</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="text-end">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button class="btn btn-danger p-2 bd-highlight">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 15">
                                        ::before
                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                                    </svg>
                                </button>
                                <button type="button" class="btn btn-primary">Check Out Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function likePress(){
            var unlove = document.getElementById("love");
            unlove.className = 'fas fa-heart';
            unlove.classList.toggle("far fa-heart");
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
