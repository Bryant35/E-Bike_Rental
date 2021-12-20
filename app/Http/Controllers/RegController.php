<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegModel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegController extends Controller
{
    function __construct()
    {
        $this -> RegModel = new RegModel();
    }
    public function save_penyewa()
    {

    }

}
