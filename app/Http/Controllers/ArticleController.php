<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller{



    public function addArticle(Request $request){
        Article::addArticle($request);
        return  redirect('/');

    }

    public function updateArticle(Request $request,$id){

        if(strlen(trim($request->titleArticleUpdate))>1 && strlen(trim($request->txtInput))>1){

        DB::table('articles')->where('id', $id)->update([
            'tittle'=>trim($request->titleArticleUpdate),
            'text'=>trim($request->txtInput)

        ]);
        }
        return redirect($request->headers->get('referer', '/'));
    }
}
