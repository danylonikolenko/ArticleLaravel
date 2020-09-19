<?php

namespace App;
use Session;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'articles';
    public $timestamps = false;

    public static function addArticle(Request $request){

        $author = Session::get('logged_user');

        $article = new Article();
        $article->text = trim($request->text);
        $article->author = $author;
        $article->tittle = trim($request->tittle);
        $article->date = date('y-m-d');

        //$path = $request->file('image')->store('uploads','public');

        if ($request->file('image') == null) {
            $path = "uploads/placeholder.png";
        }else{
            $path = $request->file('image')->store('uploads','public');
        }
        $article->image = $path;

        $article->save();

    }
}
