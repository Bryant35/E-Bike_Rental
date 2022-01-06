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
        $lastdate = $req->inputlast;
        $color = $req->Bikepick;
        $hourdiff = round((strtotime($lastdate) - strtotime($datetime))/3600, 1);
      
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
            Session::flash('Pickup time is in the before time... THE PAST!!!!');
            return redirect('/order');

        }
        else if($lastdate < $datetime){
            Session::flash("Dropoff time is before the pickup time. YOU Can't do that");
            return redirect('/order');
        }
        else{
            //dd(Carbon::now()->setTimezone('Asia/Jakarta'),Carbon::parse($datetime));
            Session::put('location',$location);
            Session::put('datetime',$datetime);
            Session::put('lastdate',$lastdate);
            Session::put('color',$colorid);
            Session::put('duration',$hourdiff);
            return view('ordermethods');
        }

    }

    public function holdermethod(Request $req){
        $method = $req->pay;
        $price = Session::get('duration') * 5000;
        Session::put('method',$method);
        Session::put('price',$price);
        $penyewa = penyewa::where('USERNAME_PENYEWA',Session::get('login'))->get();
        return view('ordersummary',compact('penyewa'));

    }



    public function insert(){
        $penyewa = penyewa::where('USERNAME_PENYEWA',Session::get('login'))->get();
        $id = $penyewa->ID_PENYEWA;
        $ids = Session::get('color');
        $hargas = Session::get('price');
        $tanggals = Carbon::parse(Session::get('datetime'));
        $tanggals->toDateString();
        $last = Carbon::parse(Session::get('lastdate'));
        $last->toDateString();
        $jams = Carbon::parse(Session::get('datetime'))->format('H:i:s');
        $jaml = Carbon::parse(Session::get('lastdate'))->format('H:i:s');
       $hasilid = db::select('SELECT fGenIDsewa( '.$id.' )');


        Session::put('idtrans',$hasilid);
        








       $transaksi = transaksi_sewa::create(
            [   'ID_SEWA'=>$hasilid,
                'ID_SEPEDA'=>$ids,
                'ID_PENYEWA'=>$id,
                'HARGA_SEWA'=>$hargas,
                'TANGGAL_SEWA'=>$tanggals,
                'JAMAWAL_SEWA'=>$jams,
                'TGLAKHIR_SEWA'=>$last,
                'JAMAKHIR_SEWA'=>$jaml,
                'SEWA_DELETE'=>'0',
           ]
       );
       
       }

}
