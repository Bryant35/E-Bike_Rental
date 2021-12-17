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

    //
}
