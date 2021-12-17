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
        // ini yg bener
        $cmd = "SELECT count(*) is_exist ".
                "FROM ".$this->tabel_terpilih." ".
                "WHERE USERNAME_PENYEWA=:username AND PASSWORD_PENYEWA=:password;";

        // ini coba-coba
        // $cmd = 'SELECT username, nama_pelanggan, email_pelanggan,hp_pelanggan'.
        //         ' FROM '.$this->tabel_terpilih;

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

}

