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


    public function cekPenyewa($uname, $email){
        $cmd = "SELECT USERNAME_PENYEWA, EMAIL_ADDRESS ".
                "FROM penyewa ".
                "WHERE USERNAME_PENYEWA = :uname OR EMAIL_ADDRESS = :email;";
        $data = [
            'uname'=> $uname,
            'email'=> $email
        ];

        $res = DB::select($cmd, $data);
        if($res != null)
        {
            return $res;
        }
        else{
            $res = 'null';
            return $res;
        }
    }

    public function cekPenyewa2($uname, $email, $IDPenyewa){
        $cmd = "SELECT USERNAME_PENYEWA, EMAIL_ADDRESS ".
                "FROM penyewa ".
                "WHERE ID_PENYEWA != :IDPenyewa AND (USERNAME_PENYEWA = :uname OR EMAIL_ADDRESS = :email);";
        $data = [
            'uname'=> $uname,
            'email'=> $email,
            'IDPenyewa'=> $IDPenyewa
        ];

        $res = DB::select($cmd, $data);
        if($res != null)
        {
            return $res;
        }
        else{
            $res = 'null';
            return $res;
        }
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

    public function topupInsert($IDPenyewa, $nom, $pay){
        $cmd1 = "set time_zone = '+07:00';";
        $res1 = DB::select($cmd1);
        $cmd = "INSERT INTO transaksi_topup ".
                "SELECT fGenIDtopup(ID_PENYEWA) as `ID_TOPUP`, ID_PENYEWA, :nom as `TOTAL_TOPUP`, now() as `TANGGAL_TOPUP`, :method as `PAYMENT_METHOD`, 0 as `TOPUP_DELETE` ".
                "FROM penyewa ".
                "WHERE ID_PENYEWA = :idpenyewa;";
        $data = [
            'nom'=> $nom,
            'idpenyewa'=> $IDPenyewa,
            'method'=> $pay
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


    public function userCek($IDPenyewa){
        $cmd = "SELECT USERNAME_PENYEWA, PASSWORD_PENYEWA FROM penyewa WHERE ID_PENYEWA = :idpenyewa;";
        $data = ['idpenyewa' => $IDPenyewa];

        $res = DB::select($cmd,$data);

        return $res;
    }

    public function passUpdate($NewPass, $IDPenyewa){
        $cmd = "UPDATE penyewa ".
                "SET PASSWORD_PENYEWA = :NewPass ".
                "WHERE ID_PENYEWA = :IDPenyewa;";
        $data = [
            'NewPass' => $NewPass,
            'IDPenyewa' => $IDPenyewa
        ];

        $res = DB::update($cmd, $data);

        return $res;
    }


    //cek Time
    public function cekTime(){
        $cmd = "SET time_zone = '+07:00';";
        $res = DB::select($cmd);
        $cmd = "SELECT now();";
        $res = DB::select($cmd);

        return $res;
    }

    //forgot password page
    public function send_pass($email){
        $data = [
            'email' => $email
        ];
        // dd($data);
        $cmd = "SELECT PASSWORD_PENYEWA, USERNAME_PENYEWA FROM penyewa WHERE EMAIL_ADDRESS =:email;";
        $res = DB::select($cmd, $data);
        return $res[0];
    }

    public function cek_account($email){
        $data = [
            'email' => $email
        ];
        // dd($data);
        $cmd = "SELECT count(*) as `data` FROM penyewa WHERE EMAIL_ADDRESS =:email;";
        $res = DB::select($cmd, $data);
        return $res;
    }

    public function history_transaksi($IDPenyewa){
        $cmd = "CALL pHistory(:IDPenyewa);";
        $data = ['IDPenyewa'=>$IDPenyewa];
        $res = DB::select($cmd, $data);
        return $res;
    }

    public function total_purchase($IDPenyewa){
        $cmd = "SELECT SUM(PRICE) as `TotalPurchase` ".
                "FROM (SELECT ".
                "ts.ID_SEWA AS `Invoice`, s.WARNA_SEPEDA AS `TypeBike`, CONCAT(ts.TANGGAL_SEWA, ' ', ts.JAMAWAL_SEWA) as `DateRent`, CONCAT(ts.TGLAKHIR_SEWA, ' ', ts.JAMAKHIR_SEWA) as `EndDate`, HARGA_SEWA AS `Price` ".
                "FROM transaksi_sewa ts JOIN sepeda s JOIN penyewa p ".
                "WHERE ((s.ID_SEPEDA = ts.ID_SEPEDA) AND (ts.ID_PENYEWA = :IDPenyewa)) GROUP BY `Invoice` ".
                "ORDER BY ts.TANGGAL_SEWA DESC) a;";
        $data = ['IDPenyewa'=>$IDPenyewa];
        $res = DB::select($cmd, $data);
        return $res;
    }

    public function history_topup($IDPenyewa){
        $cmd = "SELECT t.ID_TOPUP AS `Invoice`, t.PAYMENT_METHOD AS `Payment_Method`, TANGGAL_TOPUP AS `Tanggal_Topup`, TOTAL_TOPUP AS `Nominal` ".
                "FROM transaksi_topup t JOIN sepeda s JOIN penyewa p ".
                "WHERE (t.ID_PENYEWA = :IDPenyewa) GROUP BY `Invoice` ORDER BY `Tanggal_Topup` DESC;";
        $data = ['IDPenyewa'=>$IDPenyewa];
        $res = DB::select($cmd, $data);
        return $res;
    }

    public function total_tpurchase($IDPenyewa){
        $cmd = "SELECT SUM(Nominal) as `SUMTopup` ".
                "FROM (SELECT t.ID_TOPUP AS `Invoice`, t.PAYMENT_METHOD AS `Payment_Method`, TANGGAL_TOPUP AS `Tanggal_Topup`, TOTAL_TOPUP AS `Nominal` ".
                "FROM transaksi_topup t JOIN sepeda s JOIN penyewa p ".
                "WHERE (t.ID_PENYEWA = :IDPenyewa) GROUP BY `Invoice` ORDER BY `Tanggal_Topup` DESC) a;";
        $data = ['IDPenyewa'=>$IDPenyewa];
        $res = DB::select($cmd, $data);
        return $res;
    }

    public function semua_transaksi($IDPenyewa){
        $cmd = "call KMMI3.AllTransaction(:IDPenyewa);";
        $data = ['IDPenyewa'=>$IDPenyewa];
        $res = DB::select($cmd, $data);
        return $res;
    }
}

