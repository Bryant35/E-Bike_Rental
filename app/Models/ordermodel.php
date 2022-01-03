<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordermodel extends Model
{
    use HasFactory;

    private $tabel_terpilih = 'transaksi_sewa';


    public function inputdata($data){
        $cmd = "";
   }
}
