<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Awal;
use Session;
use Alert;


class ordercontroller extends Controller
{




    public function holder(Request $req)
    {

        $login = Session::get('login');
        $today = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate() + '-' + today.getHours() + ":" + today.getMinutes();
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
        if($datetime < $today){
            Session::flash('error', 'Waktu yang dipilih ada di masa lampau... pikir dikit dong!');
        }
        else
        {
        return view('ordermethods',$data);
        }
    }
}
   
