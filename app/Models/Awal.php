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
        $cmd1 = "set time_zone = '+07:00';";
        $res1 = DB::select($cmd1);
        $cmd = "INSERT INTO transaksi_topup ".
                "SELECT fGenIDtopup(ID_PENYEWA) as `ID_TOPUP`, ID_PENYEWA, :nom as `TOTAL_TOPUP`, now() as `TANGGAL_TOPUP`, 0 as `TOPUP_DELETE` ".
                "FROM penyewa ".
                "WHERE ID_PENYEWA = :idpenyewa;";
        $data = [
            'nom'=> $nom,
            'idpenyewa'=> $IDPenyewa
        ];
        $res = DB::insert($cmd, $data);

        return $res;
    }

    public function saldoupdate($IDPenyewa, $nom){
        $cmd = "UPDATE penyewa ".
                "SET SALDO_PENYEWA = SALDO_PENYEWA + :nom ".
                "WHERE ID_PENYEWA = :idpenyewa;";
        $data = [
            'nom'=> $nom,
            'idpenyewa' => $IDPenyewa
        ];
        $res = DB::update($cmd, $data);

        $cmd = "SELECT SALDO_PENYEWA ".
                "FROM penyewa ".
                "WHERE ID_PENYEWA = :idpenyewa;";
        $data = ['idpenyewa' => $IDPenyewa];
        $res = DB::select($cmd, $data);

        return $res;
    }

    public function data_topup($IDPenyewa){
        $cmd =  "SELECT * FROM KMMI3.transaksi_topup WHERE ID_PENYEWA = :idpenyewa ORDER BY ID_TOPUP desc LIMIT 1;";
        $data = ['idpenyewa'=>$IDPenyewa];
        $res = DB::select($cmd, $data);
        return $res;
    }


    public function profileUpdate($data){
        $cmd = "UPDATE penyewa ".
                "SET USERNAME_PENYEWA = :uname, ALAMAT_PENYEWA =:address, TELP_PENYEWA =:phone , EMAIL_ADDRESS =:email ".
                "WHERE ID_PENYEWA = :IDpenyewa;";

        $res = DB::update($cmd, $data);

        return $res;
    }

    public function saldoCek($IDPenyewa){
        $cmd = "SELECT * FROM penyewa WHERE ID_PENYEWA = :IDpenyewa;";
        $data=['IDpenyewa'=> $IDPenyewa];

        $res = DB::select($cmd,$data);

        return $res;
    }
}

