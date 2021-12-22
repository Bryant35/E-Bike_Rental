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
            // view('homepage', ['user',
            //       $uname]);

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

        $user = new Awal;
        $tampil_data = $user->akun($login);
        // dd($tampil_data);
        return view('account',compact('tampil_data'));

    }
}
