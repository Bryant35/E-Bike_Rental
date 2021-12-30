<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Topup Complete</title>
</head>
<body>
    <div class="border border-primary">
        <label class="position-absolute text-end">{{$tampil_data[0]->TANGGAL_TOPUP}}</label><br>
        <label class="top-0 end-0">{{$tampil_data[0]->ID_TOPUP}}</label><br>
        <label class="top-0 end-0">{{ session()->get('login') }}</label><br>
        <label class="top-0 end-0">{{$tampil_data[0]->TOTAL_TOPUP}}</label>
    </div>

</body>
</html>
