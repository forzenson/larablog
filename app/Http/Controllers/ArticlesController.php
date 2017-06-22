<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {

       $article = Article::find($id);

       return view('articles.show')
                    ->with('article', $article);

    }

    public function listByCategoryId($id)
    {

    $articles = Article::with('category')->where('category_id',$id)->get();

    return view('articles.single')
                    ->with('articles', $articles);

    }

    public function listOrderByCategories()
    {

    $articles = Article::with('category')->orderBy('category_id', 'asc')->get();

    return view('articles.list')
                    ->with('articles', $articles);

    }

    public function listByCategories()
    {

    $categories = Category::with(['articles' => function($query){
        $query->orderBy('updated_at', 'DESC')->take(4)->get();
    }])->get();

    return view('articles.categories')
                    ->with('categories', $categories);

    }
}
