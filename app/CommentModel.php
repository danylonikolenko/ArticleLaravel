<?php

namespace App;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    protected $primaryKey = 'id_comment';
    protected $table = 'comments';
    public $timestamps = false;

    public static function addComment(Request $request){

        $author = Session::get('logged_user');

        $comment = new CommentModel();
        $comment->text_comment = trim($request->text_comment);
        $comment->name = $author;
        $comment->date_comments = date('y-m-d');
        $comment->id_article_com = $request->articleIdCom;

        $user = DB::table('users')->where('login',$author)->first();
        $id_user = $user->id_user;

        $comment->id_user_com = $id_user;

        if(strlen(trim($request->text_comment))>=1){
            $comment->save();
        }



    }


}
