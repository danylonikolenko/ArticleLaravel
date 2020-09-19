<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
class Login extends Controller
{
    public function logout(Request $request)
    {
        Session::flush();
        return redirect($request->headers->get('referer', '/'));
    }

    public function log_in(Request $request)
    {

        $user = DB::table('users')->where('login', $request->login)->first();
        $checkUser = DB::table('users')->where('login', $request->login)->first();

        //$login = $user->login;
        if (isset($user)) {
            $checkPass = $checkUser->password;
            $pass = $request->pass;
            $pass = trim($pass);


            if (trim($checkPass) == $pass) {


                if (Session::has('logged_user')) {
                    Session::flush('logged_user', $request->login);
                }

                Session::put('logged_user', $request->login);
                return redirect($request->headers->get('referer', '/'));

            }else {

                echo "Incorrect Password";
            }
        } else {

            echo "UNKNOWN USER";
        }


    }
}
