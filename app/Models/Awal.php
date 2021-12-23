<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Awal extends Model
{
    use HasFactory;
    private $tabel_terpilih = 'penyewa';

    public function isExist($data){
        $cmd = "SELECT count(*) is_exist ".
                "FROM ".$this->tabel_terpilih." ".
                "WHERE USERNAME_PENYEWA=:username AND PASSWORD_PENYEWA=:password;";

        $res = DB::select($cmd,$data);

        if($res[0]->is_exist == 1){
            return true;
        }
        return false;

        if(isset($res) && count($res) > 0){
            return $res;
        }
        return null;
    }

    public function regis($data){
        $cmd = "CALL NewPenyewa(:name, :uname, :address, :phone, :email, :pass)";

        $res = DB::insert($cmd,$data);

        return $res;
    }

    public function cekdata($data){
        $cmdd = "SELECT count(*) FROM penyewa WHERE USERNAME_PENYEWA =:uname OR EMAIL_ADDRESS =:email;";

        $ress = DB::select($cmdd,$data);

        return $ress;

        // if(isset($res) && count($res) > 0){
        //     return $res;
        // }
        // return null;
    }

    public function akun($login){
        $cmd = "SELECT * FROM penyewa WHERE USERNAME_PENYEWA =:username;";
        $data=['username'=> $login];

        $res = DB::select($cmd,$data);

        return $res;
    }
}

