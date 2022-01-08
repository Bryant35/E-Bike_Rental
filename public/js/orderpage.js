
$choice = "Iron Bikes";
$ironloc = "https://maps.google.com/maps?q=pakuwon%20mall%20surabaya&t=&z=13&ie=UTF8&iwloc=&output=embed";
$emeraldloc = "https://maps.google.com/maps?q=ciputra%20world&t=&z=13&ie=UTF8&iwloc=&output=embed";
$goldloc = "https://maps.google.com/maps?q=tunjungan%20plaza&t=&z=13&ie=UTF8&iwloc=&output=embed";
$rubyloc = "https://maps.google.com/maps?q=galaxy%20mall%203&t=&z=13&ie=UTF8&iwloc=&output=embed";
$location = "";
$datetime = "";
$color = "";
function map(){
    $mapchoice = document.getElementById("location");
    $choice = $mapchoice.options[$mapchoice.selectedIndex].text;

    if ($choice == "Iron Bikes")
    {
        document.getElementById("gmap").src = $ironloc;
    }
    else if ($choice == "Emerald Bikes")
    {
        document.getElementById("gmap").src = $emeraldloc;
    }
    else if ($choice == "Gold Bikes")
    {
        document.getElementById("gmap").src = $goldloc;
    }
    else if ($choice == "Ruby Bikes")
    {
        document.getElementById("gmap").src = $rubyloc;
    }
}
function bike(){
    $bikechoice = document.getElementById("bikepick").value;
    if ($bikechoice == "biru" ){
        document.getElementById("bikeimg").src = "img/bluebike.jpg";
    }
    else if($bikechoice == "hitam" ){
        document.getElementById("bikeimg").src = "img/blackbike.jpg";
    }
    else if($bikechoice == "hijau" ){
        document.getElementById("bikeimg").src = "img/greenbike.jpg";
    }
    else if($bikechoice == "jingga" ){
        document.getElementById("bikeimg").src = "img/orangebike.jpg";
    }
    else if($bikechoice == "kuning" ){
        document.getElementById("bikeimg").src = "img/yellowbike.jpg";
    }
    else if($bikechoice == "merah" ){
        document.getElementById("bikeimg").src = "img/redbike.jpg";
    }
    else if($bikechoice == "pink" ){
        document.getElementById("bikeimg").src = "img/pinkbike.jpg";
    }
    else {
        document.getElementById("bikeimg").src = "img/purplebike.jpg";
    }
    
    
}

 function taxsi(){

  $tax = parseInt(document.getElementById("duitamount").value);

  $taxaf = $tax + $tax/100*15;
  
  document.getElementById("taxamount").value = $taxaf;

}








