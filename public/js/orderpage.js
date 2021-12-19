

$ironloc = "";
$emeraldloc = "";
$goldloc = "";
$rubyloc = "";


function map (){
    $mapchoice = document.getElementById("location")
    if ($mapchoice == "Iron") 
    {
        document.gmap_canvas.src = $ironloc;
    }
    else if ($mapchoice == "Emerald")
  {
    document.gmap_canvas.src = $emeraldloc;
  }
  else if ($mapchoice == "Gold")
  {
    document.gmap_canvas.src = $goldloc;
  }
  else if ($mapchoice == "Ruby")
  {
    document.gmap_canvas.src = $rubyloc;
  }
}