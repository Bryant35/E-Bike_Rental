
$choice = "Iron Bikes";
$ironloc = "https://maps.google.com/maps?q=pakuwon%20tower&t=&z=13&ie=UTF8&iwloc=&output=embed";
$emeraldloc = "https://maps.google.com/maps?q=ciputra%20world&t=&z=13&ie=UTF8&iwloc=&output=embed";
$goldloc = "https://maps.google.com/maps?q=tunjungan%20plaza&t=&z=13&ie=UTF8&iwloc=&output=embed";
$rubyloc = "https://maps.google.com/maps?q=galaxy%20mall%203&t=&z=13&ie=UTF8&iwloc=&output=embed";
$location = "";
$datetime = "";
$color = "";
var d = new Date().toLocaleString("en-US", {timeZone: "Asia/Jakarta"});
document.getElementById('timenow').innerHTML=d;
var today = new Date();
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

 function taxsi(){

  $tax = parseInt(document.getElementById("duitamount").value);

  $taxaf = $tax + $tax/100*15;
  
  document.getElementById("taxamount").value = $taxaf;

}

function errorchk(){
    $picktime = getElementById('pickuptime');
    if($picktime < today){
        alert("Time cannot be smaller");
    }
}





