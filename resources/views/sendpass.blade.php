<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* On mouse-over, add a deeper shadow */
        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        /* Add some padding inside the card container */
        .container {
        padding: 2px 16px;
        }
        .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 5px; /* 5px rounded corners */
        }
        /* Add rounded corners to the top left and the top right corner of the image */
        img {
        border-radius: 5px 5px 0 0;
        }
    </style>
</head>
<body>
<!-- <form action="/hubungikami"></form> -->

    {{-- <h2 style="text-align: center;">Your Password is</h2>
    <p class="text-decoration-underline" style="text-align: center;">{{$password}}</p>
    <h4 style="text-align: center;">Enjoy Your Password</h4> --}}
    {{-- <div class="card">
        <div class="card-header">
            Your Account
        </div>
        <div class="card-body">
            <h5 class="card-title">Your Username :
                <p class="card-text">{{$username}}</p>
            </h5>

            <h5 class="card-title">Your Password :</h5>
            <p class="card-text">{{$password}}</p>
            <a href="http://127.0.0.1:8000/login" class="btn btn-primary">Login</a>
        </div>
    </div> --}}
    <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); transition: 0.3s; border-radius: 5px;">
        <div class="container" style="padding: 2px 16px;">
            <h1><b>Your Account</b></h1>
            <p><b>Your Username :</b> {{$username}}</p>
            <p><b>Your Password :</b> {{$password}}</p>
        </div>
    </div>
</body>

