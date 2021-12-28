<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/confirmtopup.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Topup-Complete</title>
</head>
<body>
    <div class="modal" id="modal">
        <label class="text-end">{{$tampil_data[0]->TANGGAL_TOPUP}}</label><br>
        <label class="position-absolute top-0 end-0">{{$tampil_data[0]->ID_TOPUP}}</label><br>
        <label class="position-absolute top-0 end-0">{{ session()->get('login') }}</label><br>
        <label class="position-absolute top-0 end-0">{{$tampil_data[0]->TOTAL_TOPUP}}</label>
    </div>
    <script src="js/completetopup.js"></script>
</body>
</html>
