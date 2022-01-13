<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Awal;
use App\Models\wishlist;
use Session;
use Alert;
use Mail;
use Cookie;
use DB;
use Hash;


class LoginController extends Controller
{
    public function Cookie_Login(Request $req){
        $login = Session::get('RememberMe');
        if($login == 'Yes')
        {
            Session::get('login');
            return redirect('/home');
        }
        else{
            Session::flush();
            return view('landingpage');
        }
    }
    //Login page
    public function cek_login(Request $req){
        $uname = $_POST['uname'];
        $pass = $req->input('password');
        $req->input([
            'RememberMe' => 'accepted'
        ]);

        //iseng1
        // session_start();

        // include "koneksi.php";

        // $nim = $_POST["nim"];
        // $fakultas = $_POST["fakultas"];

        // $query = "select * from mahasiswa where nim='$nim' and fakultas='$fakultas'";
        // $result = mysqli_query($link, $query);

        // $banyakRecord = mysqli_num_rows($result);

        // if($banyakRecord > 0){
        //     $data = mysqli_fetch_assoc($result);
        //     $nama = $data["nama"];

        //     $_SESSION["namaUser"] = $nama;

        //     $cookieNama = "namaUser";
        //     $cookieNilai = $nama;
        //     $cookieWaktu = time() + 3600;

        //     setcookie($cookieNama, $cookieNilai, $cookieWaktu, "/");

        //     echo "
        //     <h2>Selamat siang $nama</h2>
        //     <script>
        //         alert('Klik Ok untuk ke halaman baru');
        //         window.location.href = 'halaman_baru.php';
        //     </script>
        //     ";
        // }
        // else{
        //     echo "
        //     <script>
        //         alert('Login gagal!');
        //         window.location.href = 'login.php';
        //     </script>
        //     ";
        // }

        // //iseng2
        // include "koneksi.php";

        // $nim = $_POST["nim"];
        // $fakultas = $_POST["fakultas"];

        // $query = "select * from mahasiswa where nim='$nim' and fakultas='$fakultas'";
        // $result = mysqli_query($link, $query);

        // $banyakRecord = mysqli_num_rows($result);

        // if($banyakRecord > 0){
        //     $data = mysqli_fetch_assoc($result);
        //     $nama = $data["nama"];

        //     $cookieNama = "namaUser";
        //     $cookieNilai = $nama;
        //     $cookieWaktu = time() + 3600;

        //     setcookie($cookieNama, $cookieNilai, $cookieWaktu, "/");

        //     echo "
        //     <h2>Selamat siang $nama</h2>
        //     ";
        // }
        // else{
        //     echo "
        //     <script>
        //         alert('Login gagal!');
        //         window.location.href = 'login.php';
        //     </script>
        //     ";
        // }

        // //iseng3
        // if(!isset($_COOKIE["namaUser"]))
        // {
        //     echo "
        //     <!DOCTYPE html>
        //     <html>
        //     <head>
        //     </head>
        //     <body>
        //         <h2>Login Page</h2>
        //         <form id='frmLogin' method='post' action='frmHandler2.php'>
        //             NIM: <input type='text' name='nim' id='nim'><br>
        //             Fakultas: <input type='text' name='fakultas' id=fakultas'><br>
        //             <input type='submit' value='Login'>
        //         </form>
        //     </body>
        //     </html>
        //     ";
        // }
        // else
        // {
        //     $nama = $_COOKIE["namaUser"];
        //     echo "
        //     <h2>Selama datang kembali $nama</h1>
        //     ";
        // }
        //endiseng

        $data = [
            'username' => $uname,
            'password' => $pass
        ];
        $user = new Awal;
        $flag_exist = $user->isExist($data);

        // die;
        if ($flag_exist){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
            Session::flush();
            Session::put('login', $uname);
            Session::put('pass', $pass);

            if($req->has('RememberMe')){
            //  $minute = time()+60*60*24*30;
            //  setcookie('user', $uname, $minute);
                session_start();
                $cekSession = Session::put('RememberMe', 'Yes');
            }
            else{
                session_set_cookie_params(0);
                session_start();
                $cekSession = Session::put('RememberMe', 'No');
            }
            Session::flash('success', 'Login Success!');
            return redirect('/home');
        }else {
            //2.b. Jika TIDKA KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Email or Password is Incorrect!');
            return redirect('/login');
        }
    }


    //register page
    public function regis(Request $req){
        $messages = array();
        $usedName = array();
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
            Session::flash('emptydata', 'Data cannot be Empty');
            return redirect('/register');
        }


        $user = new Awal;

        $data = [
            'name' => $name,
            'uname' => $uname,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'pass' => $pass
        ];

        $cek_penyewa = $user->cekPenyewa($uname, $email);

        if($cek_penyewa == 'null')
        {
            $flag_exist = $user->regis($data);

            if($flag_exist==1){
                //echo "Berhasil Insert Data User!";
                Session::flash('success', 'Anda berhasil membuat akun!');
                return redirect('/login');
            }
        }
        else{
            $count = count($cek_penyewa);
            if($count >= 1){
                if($cek_penyewa[0]->USERNAME_PENYEWA == $uname){
                    array_push($usedName,'Username has been used.');
                }
                elseif($count == 2){
                    if($cek_penyewa[1]->USERNAME_PENYEWA == $uname){
                        array_push($usedName,'Username has been used.');
                    }
                }
            }
            if($count >= 1){
                if($cek_penyewa[0]->EMAIL_ADDRESS == $email){
                    array_push($usedName,'Email has been used.');
                }
                elseif($count == 2){
                    if($cek_penyewa[1]->EMAIL_ADDRESS == $email){
                        array_push($usedName,'Email has been used.');
                    }
                }
            }
            if (isset($usedName) && count($usedName)>0){
                Session::flash('usernameUsed', $usedName);
                return redirect('/register');
            }
        }
        return redirect('/register');



    }



    //Account Page
    public function updateProfile(Request $req){
        $login = Session::get('login');
        $usedName = array();
        $IDPenyewa = Session::get('IDpenyewa');
        $uname = $req->input('uname');
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $user = new Awal;

        $cekAvalaible = $user->IDPenyewa($login);

        $data = [
            'uname' => $uname,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'IDpenyewa' => $IDPenyewa
        ];

        $cek_penyewa = $user->cekPenyewa2($uname, $email, $IDPenyewa);
        if($cek_penyewa == 'null')
        {
            $updateprofile = $user->profileUpdate($data);
            $cekprofile = $user->saldoCek($IDPenyewa);
            Session::put('login', $cekprofile[0]->USERNAME_PENYEWA);
            return redirect('/account');
        }
        else{
            $count = count($cek_penyewa);
            if($count >= 1){
                if($cek_penyewa[0]->USERNAME_PENYEWA == $uname){
                    array_push($usedName,'Username has been used.');
                }
                elseif($count == 2){
                    if($cek_penyewa[1]->USERNAME_PENYEWA == $uname){
                        array_push($usedName,'Username has been used.');
                    }
                }
            }
            if($count >= 1){
                if($cek_penyewa[0]->EMAIL_ADDRESS == $email){
                    array_push($usedName,'Email has been used.');
                }
                elseif($count == 2){
                    if($cek_penyewa[1]->EMAIL_ADDRESS == $email){
                        array_push($usedName,'Email has been used.');
                    }
                }
            }
            if (isset($usedName) && count($usedName)>0){
                Session::flash('usernameUsed', $usedName);
                return redirect('/account');
            }
        }

    }
    //Insert date to Account Page
    public function akun(){
        $login = Session::get('login');
        if($login == null)
        {
            return view('login');
        }
        $user = new Awal;
        $tampil_data = $user->akun($login);
        // dd($tampil_data[0]->SALDO_PENYEWA);
        Session::put('Nama_penyewa', $tampil_data[0]->NAMA_PENYEWA);
        Session::put('Email_penyewa', $tampil_data[0]->EMAIL_ADDRESS);
        return view('account',compact('tampil_data'));
    }


    //logOut
    public function end(Request $req){
        // session()->forget('login');
        // session()->forget('pass');
        // session()->forget('saldo');
        // session()->forget('IDpenyewa');
        // session()->forget('Tax');
        // session()->forget('pay');
        // session()->forget('totalpay');
        // session()->forget('Nama_penyewa');
        // session()->forget('Email_penyewa');
        // session()->forget('nom');
        Session::flush();
        if(Cookie::get('username') != ''){
            Cookie::forget('username');
        }

        return view('landingpage');
    }

    //Home Button
    public function cek_home(){
        $login = Session::get('login');
        if($login == null)
        {
            return view('landingpage');
        }
        else{
            return redirect('/home');
        }
    }
    //Get data in Home Page
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


    //Topup page
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
        $topup_data = $user->topupInsert($IDPenyewa, $nom, $pay);

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



    //Change Password
    public function passpage(Request $req){
        $login = Session::get('login');
        $uname = $req->input('uname');
        $OldPass = $_POST['OldPass'];
        $NewPass = $_POST['NewPass'];
        $CNewPass = $_POST['CNewPass'];
        $IDPenyewa = Session::get('IDpenyewa');
        $data = [
            'uname' => $uname,
            'OldPass' => $OldPass,
            'NewPass' => $NewPass,
            'CNewPass' => $CNewPass,
            'IDPenyewa' => $IDPenyewa
        ];
        $user = new Awal;
        $cek_user = $user->userCek($IDPenyewa);

        if($cek_user[0]->USERNAME_PENYEWA != $uname){
            Session::flash('userError', 'Wrong Username!');
            return redirect('/changepassword');
        }
        elseif($cek_user[0]->PASSWORD_PENYEWA != $OldPass){
            Session::flash('passError', 'Wrong Password!');
            return redirect('/changepassword');
        }
        elseif($NewPass != $CNewPass){
            Session::flash('newPassError', 'New Password is not the same!');
            return redirect('/changepassword');
        }
        elseif($NewPass == '' && $CNewPass == ''){
            Session::flash('newPassEmpty', 'New Password Cannot be Empty!');
            return redirect('/changepassword');
        }
        elseif($cek_user[0]->USERNAME_PENYEWA == $uname && $cek_user[0]->PASSWORD_PENYEWA == $OldPass && $NewPass == $CNewPass){
            $updatepass = $user->passUpdate($NewPass, $IDPenyewa);
            return redirect('/changepassword');
        }
    }


    public function sendhelp(Request $req){
        $this->validate($req, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);
        $berhasil= 0;
        $data = array(
        'name'      => $req->input('name'),
        'email'  => $req->input('email'),
        'message'   => $req->input('message'),
        'messages' => $req->message
        );

        // dd($data);
        try{
            Mail::send('email',$data, function($data) use($req){
                $data->to('shvrnkoll@gmail.com','Customer')->subject('Help using App');
                $data->from(env('MAIL_USERNAME','shvrnkoll@gmail.com'),'Help from Customer');

                // dd($data->to('masakyukgan@gmail.com','Verifikasi')->subject('Verifikasi Email'));
            });
        }catch (Exception $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }

        // if($berhasil == 1){
        //     Session::flash('success', 'Terima kasih telah menghubungi kami.
        //     Tanggapan Anda akan segera kami proses.');
        return redirect('/contact');
    }

    //forgot password
    public function forgot_password(Request $req){
        // $data = array(
        //     'email'  => $req->input('email')
        // );
        $email = $_POST['email'];
        $user = new Awal;
        $cekacc = $user->cek_account($email);
        if($cekacc[0]->data == '0'){
            Session::flash('error', 'Email is not registered.');
            return redirect('/forgotpassword');
        }
        $sendPass = $user->send_pass($email);

        $data = array(
            'email'  => $email,
            'password' => $sendPass->PASSWORD_PENYEWA,
            'username' => $sendPass->USERNAME_PENYEWA
        );
        // $isExist = Admin::select("*")
        //                 ->where("email", $email)
        //                 ->exists();
        // // UPDATE PASSWORD JADI 123
        // Admin::where('email',$email)->update(['password'=>'1234']);
        // BARU KIRIM KE EMAIL ADMIN
            // dd('Record is available.');

        try{
            if($cekacc[0]->data == '1'){
                Mail::send('sendpass',$data, function($data) use($req){
                    $data->to($req->email,'to -')->subject('EBike Rental Account');
                    $data->from(env('MAIL_USERNAME','shvrnkoll@gmail.com'),'Your Account');
                    Session::flash('success', 'Username and Password has been send to your email.');
                    // dd($data->to('masakyukgan@gmail.com','Verifikasi')->subject('Verifikasi Email'));
                });
                Session::put('email', $email);
            }
        }catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
        }
        return redirect('/forgotpassword');
    }

    public function resend_password(){
        $email = Session::get('email');
        $user = new Awal;
        $cekacc = $user->cek_account($email);
        if($cekacc[0]->data == '0'){
            Session::flash('error', 'Email is not registered.');
            return redirect('/forgotpassword');
        }
        $sendPass = $user->send_pass($email);

        $data = array(
            'email'  => $email,
            'password' => $sendPass->PASSWORD_PENYEWA,
            'username' => $sendPass->USERNAME_PENYEWA
        );
        // $isExist = Admin::select("*")
        //                 ->where("email", $email)
        //                 ->exists();
        // // UPDATE PASSWORD JADI 123
        // Admin::where('email',$email)->update(['password'=>'1234']);
        // BARU KIRIM KE EMAIL ADMIN
            // dd('Record is available.');

        try{
            if($cekacc[0]->data == '1'){
                Mail::send('sendpass',$data, function($data){
                    $data->to(Session::get('email'),'to -')->subject('Your Account');
                    $data->from(env('MAIL_USERNAME','shvrnkoll@gmail.com'),'EBike Rental Account');
                    Session::flash('success', 'Username and Password has been re-send to your email.');
                    // dd($data->to('masakyukgan@gmail.com','Verifikasi')->subject('Verifikasi Email'));
                });
                Session::put('email', $email);
            }
        }catch (Exception $e){
                return response (['status' => false,'errors' => $e->getMessage()]);
        }
        return redirect('/forgotpassword');
    }

    //Purchase History
    public function purchase_history(){
        $IDPenyewa = Session::get('IDpenyewa');
        $saldo = Session::get('saldo');
        $user = new Awal;
        $tampil_phistory = $user->history_transaksi($IDPenyewa);
        $tampil_thistory = $user->history_topup($IDPenyewa);
        $tampil_ahistory = $user->semua_transaksi($IDPenyewa);
        $sum_purchase = $user->total_purchase($IDPenyewa);
        $sum_tpurchase = $user->total_tpurchase($IDPenyewa);
        $sum_alltransaksi = $sum_tpurchase[0]->SUMTopup - $sum_purchase[0]->TotalPurchase;

        return view('purchasehist', compact(['tampil_phistory', 'sum_purchase', 'tampil_thistory', 'sum_tpurchase', 'tampil_ahistory', 'sum_alltransaksi']));
    }
    //rememberme
    public function remember(){

    }


    //wishlist
    public function wishlist(){
        $IDPenyewa = Session::get('IDpenyewa');
        $user = new Awal;
        $wishlist = $user->list_wishlist($IDPenyewa);
        return view('wishlist', compact(['wishlist']));
    }

    //remove wishlist
     public function delwishlist(request $req){

        $id = $req->heart;
        $wishlist = DB::table('wishlist')->where('ID_WISHLIST',$id)->delete();
        return redirect('/wishlist');

    }
}
