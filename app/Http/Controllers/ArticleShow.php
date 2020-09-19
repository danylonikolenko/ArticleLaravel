<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\CommentModel;
use DB;
class ArticleShow extends Controller

{
    public function show(Request $request, $id){

        $article = DB::table('articles')->where('id',$id)->get();
        $comments = DB::table('comments')->where('id_article_com',$id)->get();

        return  view("articleShow", [
            "article"=>$article,
            "comments"=>$comments,
            "id_article"=>$id
        ]);

    }


}

