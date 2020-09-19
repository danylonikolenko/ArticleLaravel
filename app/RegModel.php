<?php

namespace App;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class RegModel extends Model
{
    protected $primaryKey = 'id_user';
    protected $table = 'users';
    public $timestamps = false;

    public static function makeReg(Request $request){

        $reg = new RegModel();

        if(trim($request->username)!='') {
            $reg->login = trim($request->username);
        }
        $reg->email = trim($request->emailReg);
        if(strlen(trim($request->passReg1))>=8){
            $reg->password =trim($request->passReg1);
        }

        $reg->number = trim($request->numerTelef);
        $reg->save();


        if (Session::has('logged_user'))
        {
            Session::flush('logged_user', $request->username);
        }
            Session::put('logged_user', $request->username);

        //session_start();




    }
}
