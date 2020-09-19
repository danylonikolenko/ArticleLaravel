<?php

namespace App\Http\Controllers;

use App\RegModel;
use Illuminate\Http\Request;


class Registration extends Controller
{

    public function registrationF(Request $request){

        RegModel::makeReg($request);
        return redirect($request->headers->get('referer', '/'));

    }
}
