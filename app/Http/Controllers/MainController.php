<?php

namespace App\Http\Controllers;
use packages\universal\Article;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        // $art = new Article();
        //Article::create(["auteur"=>"Beckam", "content"=>"passe partout"]);
        // Article::update(0, ["auteur"=>"Daniel", "content"=>"passe et casse partout"]);
        $article = Article::all();
        //Article::delete(1);

        foreach ($article as $key => $value) {
            echo($value->content)."=".$value->auteur;
            echo"<br>";
        }
    }
}
