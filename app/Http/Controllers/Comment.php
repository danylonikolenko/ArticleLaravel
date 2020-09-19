<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CommentModel;
class Comment extends Controller
{


    public function add(Request $request){
        CommentModel::addComment($request);
        return redirect($request->headers->get('referer', '/'));
    }

    public function deleteComment(Request $request, $id_comment){
        DB::table('comments')->where('id_comment', $id_comment)->delete();
        return redirect($request->headers->get('referer', '/'));
    }

    public function change(Request $request, $id_comment){
        DB::table('comments')->where('id_comment', $id_comment)->update(['text_comment'=>trim($request->commentChangeTxt)]);
        return redirect($request->headers->get('referer', '/'));
    }

}
