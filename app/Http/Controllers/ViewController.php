<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\View;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;



class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        array_map(fn($query)=> $this->updateArticle($query) ,Article::all()->toArray());

        $articles = Article::all()->sortByDesc("views");

        return view("articles.mostViewed",["articles" => $articles ]);
    }

    public function updateArticle(array $query)
    {
        Article::find($query["id"])->update([
            "views" => View::all()->where("article_id",$query["id"])
                ->sum(fn($v)=> $v->counter)
        ]);
    }
}
