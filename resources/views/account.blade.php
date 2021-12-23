<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    {{-- header --}}
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
                    <a href="{{url('/logout')}}" class="btn btn-primary">Log Out</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{$tampil_data[0]->NAMA_PENYEWA}}</span><span class="text-black-50">{{$tampil_data[0]->EMAIL_ADDRESS}}</span><span><a href="">Change Password</a></span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4><h6 style="font-align: right;"><a href="#">Purchase History</a></h6>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" value="{{$tampil_data[0]->NAMA_PENYEWA}}"></div>
                        <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" value="{{$tampil_data[0]->USERNAME_PENYEWA}}" placeholder="username"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email" value="{{$tampil_data[0]->EMAIL_ADDRESS}}"></div>
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value="{{$tampil_data[0]->TELP_PENYEWA}}"></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value="{{$tampil_data[0]->ALAMAT_PENYEWA}}"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
