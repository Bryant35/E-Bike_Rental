<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Awal;
use Session;
use Alert;
use Log;
use Carbon\Carbon;
use App\Models\penyewa;


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
        if(Carbon::parse($datetime) < Carbon::now()->setTimezone('Asia/Jakarta')){
            // dd(Carbon::now()->setTimezone('Asia/Jakarta'), Carbon::parse($datetime)->setTimezone('Asia/Jakarta'));
            return redirect('/order');

        }
        else{
            //dd(Carbon::now()->setTimezone('Asia/Jakarta'),Carbon::parse($datetime));
            Session::put('location',$location);
            Session::put('datetime',$datetime);
            Session::put('color',$colorid);
            return view('ordermethods');
        }

    }

    public function holdermethod(Request $req){
        $price = $req->inputduit;
        Session::put('price',$price);
        $penyewa = penyewa::where('USERNAME_PENYEWA',Session::get('login'))->get();
        return view('ordersummary',compact('penyewa'));

    }



    public function a(){
       
       
    }

}
