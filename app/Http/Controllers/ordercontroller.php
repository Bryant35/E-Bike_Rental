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
use App\Models\transaksi_sewa;
use DB;


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
        $price = $hourdiff * 5000;
        $taxprice = ($price/100 * 15);
        $totprice = ($price + $taxprice);
        $colorid = "";
        if($color == "biru"){
            $colorid = "B001";
        }
        elseif($color == "hitam"){
            $colorid = "H001";
        }
        elseif($color == "hijau"){
            $colorid = "H002";
        }
        elseif($color == "jingga"){
            $colorid = "J001";
        }
        elseif($color == "kuning"){
            $colorid = "K001";
        }
        elseif($color == "merah"){
            $colorid = "M001";
        }
        elseif($color == "pink"){
            $colorid = "P001";
        }
        elseif($color == "ungu"){
            $colorid = "U001";
        }

        $user = new Awal;
        $cek_time = $user->cekTime();
        if(Carbon::parse($datetime) < Carbon::now()->setTimezone('Asia/Jakarta')){
            // dd(Carbon::now()->setTimezone('Asia/Jakarta'), Carbon::parse($datetime)->setTimezone('Asia/Jakarta'));

            return redirect('/order')->with('success','Your Pickup date is in the past dumbass');

        }
        else if($lastdate < $datetime){
            return redirect('/order')->with('success','Your Dropoff date is before your pickup date DUM DUM.');
        }
        else{
            //dd(Carbon::now()->setTimezone('Asia/Jakarta'),Carbon::parse($datetime));
            Session::put('location',$location);
            Session::put('datetime',$datetime);
            Session::put('lastdate',$lastdate);
            Session::put('color',$colorid);
            Session::put('duration',$hourdiff);
            Session::put('price',$price);
            Session::put('taxprice',$taxprice);
            Session::put('total',$totprice);

            return redirect('ordermethods');
        }

    }

    public function holdermethod(Request $req){
        $method = $req->pay;
        $total = Session::get('total');
        Session::put('method',$method);
        $penyewa = penyewa::where('USERNAME_PENYEWA',Session::get('login'))->get();
        $duitPenyewa = $penyewa[0]['SALDO_PENYEWA'];
        Session::put('duitpenyewa',$duitPenyewa);

        if(($penyewa[0]['SALDO_PENYEWA'] - $total) < 0){

            return redirect('/order')->with('success','Your Balance is not enough!');
        }
        else{
            return redirect('ordersummary');
        }
    }



    public function insert(){
        $penyewa = penyewa::where('USERNAME_PENYEWA',Session::get('login'))->get();
        $id = $penyewa[0]['ID_PENYEWA'];
        $ids = Session::get('color');
        $hargas = Session::get('total');
        $tanggals = Carbon::parse(Session::get('datetime'))->format('Y-m-d');
        $last = Carbon::parse(Session::get('lastdate'))->format('Y-m-d');
        $jams = Carbon::parse(Session::get('datetime'))->format('H:i:s');
        $jaml = Carbon::parse(Session::get('lastdate'))->format('H:i:s');
         $hasilid = DB::select('SELECT fGenIDsewa( "'.$id.'" ) as id');
         $sisa = ($penyewa[0]['SALDO_PENYEWA'] - $hargas);
        

        Session::put('idtrans',$hasilid[0]->id);


        // $transaksi = new transaksi_sewa();
        // $transaksi->ID_SEWA=$hasilid[0]->id;
        // $transaksi->ID_SEPEDA=$ids;
        // $transaksi->ID_PENYEWA=$id;
        // $transaksi->HARGA_SEWA=$hargas;
        // $transaksi->TANGGAL_SEWA=$tanggals;
        // $transaksi->JAMAWAL_SEWA=$jams;
        // $transaksi->TGLAKHIR_SEWA=$last;
        // $transaksi->JAMAKHIR_SEWA=$jaml;
        // $transaksi->SEWA_DELETE=0;
        //  $transaksi->save();
       $transaksi = DB::table('transaksi_sewa')->insert(
            [   'ID_SEWA'=>$hasilid[0]->id,
                'ID_SEPEDA'=>$ids,
                'ID_PENYEWA'=>$id,
                'HARGA_SEWA'=>$hargas,
                'TANGGAL_SEWA'=>$tanggals,
                'JAMAWAL_SEWA'=>$jams,
                'TGLAKHIR_SEWA'=>$last,
                'JAMAKHIR_SEWA'=>$jaml,
                'SEWA_DELETE'=> '0'
           ]
      );
      $updet = DB::table('penyewa')->where('ID_PENYEWA',$id)->update(['SALDO_PENYEWA'=>$sisa]);
      return redirect('orderconfirm');

       }

}
