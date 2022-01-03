<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Awal;
use Session;
use Alert;
use Log;


class ordercontroller extends Controller
{

    public function enter(){
        $login = Session::get('login');

        if($login == null)
        {
            return redirect('/login');
        }
        return view('orderpage');
    }


    public function holder(Request $req)
    {
        $location = $req->location;
        $datetime = $req->inputmap;
        $color = $req->Bikepick;
        $colorid = "";
        if($color == "Biru"){
            $colorid = "B001";
        }
        elseif($color == "Hitam"){
            $colorid = "H001";
        }
        elseif($color == "Hijau"){
            $colorid = "H002";
        }
        elseif($color == "Jingga"){
            $colorid = "J001";
        }
        elseif($color == "Kuning"){
            $colorid = "K001";
        }
        elseif($color == "Merah"){
            $colorid = "M001";
        }
        elseif($color == "Pink"){
            $colorid = "P001";
        }
        elseif($color == "Ungu"){
            $colorid = "U001";
        }

        $user = new Awal;
        $cek_time = $user->cekTime();
        if($datetime > $cek_time){
            // dd($cek_time, $datetime);
            return redirect('/order');

        }
        else{
            // dd($cek_time, $datetime);
            Session::put('location',$location);
            Session::put('datetime',$datetime);
            Session::put('color',$colorid);
            return view('ordermethods');
        }

    }

    public function holdermethod(Request $req){
        $price = $req->inputduit;
        Session::put('price',$price);
        return view('ordersummary');
    }



    public function show(){
       
       
    }

}
