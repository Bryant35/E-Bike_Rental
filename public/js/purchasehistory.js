function pHistory(){
    var pHistory = document.getElementById("TablepHistory");
    pHistory.classList.remove("visually-hidden");
    var tHistory = document.getElementById("TabletHistory");
    tHistory.classList.add("visually-hidden");
    var aHistory = document.getElementById("TableaHistory");
    aHistory.classList.add("visually-hidden");
    document.getElementById("title").innerHTML = "Purchase History";
}
function tHistory(){
    var pHistory = document.getElementById("TablepHistory");
    pHistory.classList.add("visually-hidden");
    var tHistory = document.getElementById("TabletHistory");
    tHistory.classList.remove("visually-hidden");
    var aHistory = document.getElementById("TableaHistory");
    aHistory.classList.add("visually-hidden");
    document.getElementById("title").innerHTML = "Topup History";
}
function aHistory(){
    var pHistory = document.getElementById("TablepHistory");
    pHistory.classList.add("visually-hidden");
    var tHistory = document.getElementById("TabletHistory");
    tHistory.classList.add("visually-hidden");
    var aHistory = document.getElementById("TableaHistory");
    aHistory.classList.remove("visually-hidden");
    document.getElementById("title").innerHTML = "All Transaction";
}
