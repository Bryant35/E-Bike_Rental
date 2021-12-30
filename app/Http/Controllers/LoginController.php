<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Awal;
use Session;
use Alert;

class LoginController extends Controller
{
    public function cek_login(Request $req){
        $uname = $_POST['uname'];
        $pass = $req->input('password');
        $data = [
            'username' => $uname,
            'password' => $pass
        ];
        $user = new Awal;
        $flag_exist = $user->isExist($data);

        // die;
        if ($flag_exist){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
            Session::put('login', $uname);
            Session::put('pass', $pass);

            Session::flash('success', 'Anda berhasil Login!');

            return redirect('/home');
        } else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email atau Password tidak sesuai!');
            return redirect('/login');
        }
    }



    public function regis(Request $req){
        $messages = array();
        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $name = $fname . ' ' . $lname;
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];

        //lakukan validasi inputan
        if ($fname == ''){
            array_push($messages,'First name belum diisi.'); //$messages.add('.....');
        }

        if($lname == ''){
            array_push($messages,'Last name belum diisi.'); //$messages.add('.....');
        }

        if($email == ''){
            array_push($messages,'email belum diisi.');
        }

        if($phone == ''){
            array_push($messages,'Phone belum diisi.');
        }

        if($address == ''){
            array_push($messages,'address belum diisi.');
        }

        if($uname == ''){
            array_push($messages,'Username belum diisi.');
        }

        if($pass == ''){
            array_push($messages,'Password belum diisi.');
        }

        if (isset($messages) && count($messages)>0){
            Session::flash('danger', $messages);
            return redirect('/signup');
        }

        $data = [
            'name' => $name,
            'uname' => $uname,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'pass' => $pass
        ];


        $user = new Awal;
        $flag_exist = $user->regis($data);

        if($flag_exist==1){
            //echo "Berhasil Insert Data User!";
            Session::flash('success', 'Anda berhasil membuat akun!');
            return redirect('/login');
        }
    }

    public function akun(){
        $login = Session::get('login');

        if($login == null)
        {
            return view('login');
        }
        $user = new Awal;
        $tampil_data = $user->akun($login);
        // dd($tampil_data[0]->SALDO_PENYEWA);
        return view('account',compact('tampil_data'));
    }

    public function profile(){
        $login = Session::get('login');

        if($login == null)
        {
            return redirect('/login');
        }
        $user = new Awal;
        $tampil_data = $user->akun($login);
        Session::put('saldo', $tampil_data[0]->SALDO_PENYEWA);

        $getID = $user->IDPenyewa($login);
        $IDPenyewa = $getID[0]->ID;
        Session::put('IDpenyewa', $getID[0]->ID );
        // dd($tampil_data[0]->SALDO_PENYEWA);
        return view('homepage',compact('tampil_data'));
    }

    public function end(Request $req){
        session()->forget('login');
        session()->forget('pass');
        session()->forget('saldo');
        return redirect('/');
    }

    public function cek_home(){
        $login = Session::get('login');
        if($login == null)
        {
            return redirect('/');
        }
        else{
            return redirect('/home');
        }
    }

    public function cek_topup(){
        $login = Session::get('login');
        if($login == null)
        {
            return redirect('/login');
        }
        else{
            return view('topup');
        }
    }

    public function nominal_Check(){
        $nom = $_POST['nominal'];
        $pay = $_POST['method'];
        $data = [
            'nominal' => $nom,
            'method' => $pay
        ];
        $user = new Awal;
        $tax = $user->tax($nom);
        $totalpay = $user->totalpay($nom);
        $unom = $user->updateNom($nom);
        if($pay == 'BRI' || $pay == 'BNI' || $pay == 'Mandiri' || $pay == 'BCA'){
            $pay = $pay . ' ' . 'Bank';
        }

        Session::put('Tax', $tax[0]->tax);
        Session::put('Nom', $unom[0]->nom);
        Session::put('pay', $pay);
        Session::put('totalpay', $totalpay[0]->sum);
        return redirect('/ctopup');
        //dd($nom, $pay, $tax[0]->tax);
    }

    public function completeTopup(){
        $login = Session::get('login');
        $nom = Session::get('Nom');
        $pay = Session::get('pay');
        $totalpay = Session::get('totalpay');

        $user = new Awal;
        $getID = $user->IDPenyewa($login);
        $IDPenyewa = $getID[0]->ID;
        Session::put('IDpenyewa', $getID[0]->ID );
        $data = [
            Session::get('login') => $login,
            Session::get('Nom') => $nom,
            Session::get('pay') => $pay,
            Session::get('totalpay') => $totalpay,
            $getID[0]->ID => $IDPenyewa
        ];

        $user = new Awal;
        $topup_data = $user->topupInsert($IDPenyewa, $nom);

        $topup_sum = $user->saldoupdate($IDPenyewa, $nom);
        Session::put('saldo', $topup_sum[0]->SALDO_PENYEWA);
        return redirect('/ftopup');
        $tampil_data = $user->data_topup($IDPenyewa);
        // dd($tampil_data);
        // return view('topupcomplete',compact('tampil_data'));

    }

    public function cekCompleteTopup(){
        $login = Session::get('login');
        $user = new Awal;
        $getID = $user->IDPenyewa($login);
        $IDPenyewa = $getID[0]->ID;
        $data = [
            $getID[0]->ID => $IDPenyewa
        ];

        Session::put('IDpenyewa', $getID[0]->ID );
        $tampil_data = $user->data_topup($IDPenyewa);
        return view('topupcomplete',compact('tampil_data'));
    }


    public function updateProfile(Request $req){
        $login = Session::get('login');
        $uname = $req->input('uname');
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $IDPenyewa = Session::get('IDpenyewa');
        $user = new Awal;


        $cekAvalaible = $user->IDPenyewa($login);

        $data = [
            'uname' => $uname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'IDpenyewa' => $IDPenyewa
        ];

        $updateprofile = $user->profileUpdate($data);
        $cekprofile = $user->saldoCek($IDPenyewa);
        Session::put('login', $cekprofile[0]->USERNAME_PENYEWA);
        return redirect('/account');
    }



    public function passpage(){

    }
}
