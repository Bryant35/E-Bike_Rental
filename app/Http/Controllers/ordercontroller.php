<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Awal;
use Session;
use Alert;


class ordercontroller extends Controller
{


    
$location = "";
$color = "";
$datetime = "";
$today = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate() + '-' + today.getHours() + ":" + today.getMinutes();


    public function holder(Request $req)
    {
        $login = Session::get('login');
        if($login == null)
        {
            return redirect('/login');
        }
        $location = $req->location;
        $datetime = $req->inputmap;
        $color = $req->Bikepick;

        $data = [
            'location'=> $location,
            'datetime'=> $datetime,
            'color'=> $color
        ];
        return view('ordermethods',$data);
    }

    public function errorchk(Request $req){
        if($datetime < $today ){
            Session::flash('error', 'Date yang dimasukan berada di masa lampau!!!');
        }
    }
}
