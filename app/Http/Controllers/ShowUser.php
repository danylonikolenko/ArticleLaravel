<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\UserModel;

class ShowUser extends Controller
{
    public function show(Request $request){




        $usersWithArticles = DB::table('users')
            ->get();

        $articles = DB::table('articles')->get();
        $users = UserModel::all();
        return view("showUsers",[
            "users"=>$users,
            "usersWithArticles" =>  $articles
        ]);

    }


    public function updateUser(Request $request,$id){
            DB::table('users')->where('id_user', $id)->update([
                'email'=>trim($request->email),
                'number'=>trim($request->number)

            ]);
        return redirect($request->headers->get('referer', '/'));
    }
    public function deleteUser(Request $request, $id){
        DB::table('users')->where('id_user', $id)->delete();
        return redirect($request->headers->get('referer', '/'));
    }

}
