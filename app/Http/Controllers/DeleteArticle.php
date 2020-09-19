<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DeleteArticle extends Controller
{
    public function deleteArticle(Request $request, $id){
        DB::table('articles')->where('id', $id)->delete();
        return  redirect('/');
    }
}
