<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function holder(Request $req)
    {
        $location = $req->location;
        $datetime = $req->inputmap;
        $color = $req->Bikepick;

        $data = [
            'location'=> $location,
            'datetime'=> $datetime,
            'color'=> $color
        ];
        return view('ordermethods',$data);
    }
}
