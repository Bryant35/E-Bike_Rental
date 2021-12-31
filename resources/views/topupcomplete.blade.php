<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\topupcomplete.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Topup Complete</title>
    <link rel = "icon" href = "img/ebike_logo.png" type = "image/x-icon">
</head>
<body>
    <div>
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle shadow-lg">
                <div class="border border-primary rounded-3 white" style="width: 350px; height: 500px;">
                    <div class="m-4 white">
                        <h5 class="text-end white">{{$tampil_data[0]->TANGGAL_TOPUP}}</h5><br>
                        <h6 class="text-center white">{{$tampil_data[0]->ID_TOPUP}}</h6>
                        <h5 class="text-center white">{{ session()->get('login') }}</h5>
                        <div class="d-flex justify-content-between white">
                            <h5 class="white">Total Top-up :</h5>
                            <h5 class="text-center white">Rp. {{$tampil_data[0]->TOTAL_TOPUP}}</h5>
                        </div>
                        <div class="d-flex justify-content-between white">
                            <h5 class="white">Total Payment :</h5>
                            <h5 class="text-center white">Rp. {{ Session::get('totalpay') }}</h5>
                        </div>
                        <h5 class="text-end white">({{ Session::get('pay') }})</h5>
                        <br>
                        <h6 class="text-center white">Top-Up Complete</h6>
                        <div class="position-static">
                            <div class="position-absolute bottom-0 start-50 translate-middle-x my-4"><a href="{{url('/homee')}}" class="btn btn-primary">Back to Home</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
