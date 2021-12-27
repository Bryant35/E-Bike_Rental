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

    public function akun($login){
        $cmd = "SELECT * FROM penyewa WHERE USERNAME_PENYEWA =:username;";
        $data=['username'=> $login];

        $res = DB::select($cmd,$data);

        return $res;
    }

    public function tax($nom){
        $cmd = "SELECT (substring_index(:nominal, '.', -1) / 10) as `tax`;";
        $data=['nominal'=> $nom];

        $res = DB::select($cmd, $data);

        return $res;
    }

    public function totalpay($nom){
        $cmd = "SELECT (substring_index(:nominal, '.', -1)) * 1.1 as `sum`;";
        $data=['nominal'=> $nom];

        $res = DB::select($cmd, $data);

        return $res;
    }

    public function updateNom($nom){
        $cmd = "SELECT (substring_index(:nominal, '.', -1))as `nom`;";
        $data=['nominal'=> $nom];

        $res = DB::select($cmd, $data);

        return $res;
    }

    public function IDpenyewa($login){
        $idpenyewa = "SELECT ID_PENYEWA as `ID` FROM penyewa WHERE USERNAME_PENYEWA=:login;";
        $data = ['login' => $login];
        $res = DB::select($idpenyewa, $data);

        return $res;
    }

    public function topupInsert($IDPenyewa, $nom){
        $cmd = "INSERT INTO transaksi_topup ".
                "SELECT fGenIDtopup(ID_PENYEWA) as `ID_TOPUP`, ID_PENYEWA, :nom as `TOTAL_TOPUP`, now() as `TANGGAL_TOPUP`, 0 as `TOPUP_DELETE` ".
                "FROM ".$this->tabel_terpilih." ".
                "WHERE ID_PENYEWA = :idpenyewa;";
        $data = [
            'nom'=> $nom,
            'idpenyewa' => $IDPenyewa
        ];
        $res = DB::insert($cmd, $data);

        return;
    }

    public function saldoupdate($IDPenyewa, $nom){
        $cmd =  "SELECT SALDO_PENYEWA as `saldo` FROM penyewa WHERE ID_PENYEWA = :idpenyewa;";
        $data = [
            'nom'=> $nom,
            'idpenyewa' => $IDPenyewa
        ];
        $res = DB::select($cmd, $data);
        return $res;
    }
}

