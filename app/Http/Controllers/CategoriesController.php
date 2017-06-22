<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class CategoriesController extends Controller
{
    //
    public function index()
    {

        $categories = Category::with('latestPost')->take(20)->get();

        return view('categories.index', compact('categories'));
    }

    public function single()
    {
        // select * from `articles` where `articles`.`category_id` = 1 order by `created_at` desc limit 1

        $category = Category::first();

        $latestPost = $category->articles()->latest()->first();

        return view('categories.single', compact('latestPost'));

         $categories = Category::take(20)->get();

        // The same query as above executed in the foreach loop = N+1 issue.
        $categories = Category::with(['articles' => function ($q) {
            $q->latest(); // sorting related table, so we can use first on the collection
             }])->take(20)->get();

        // $categories = Category::with(['articles' => function ($q) {
        //       $q->latest()->limit(1);
        //     }])->take(20)->get();

            // select * from `articles` where `articles`.`category_id` in (1..20) order by `created_at` desc limit 1


        $categories = Category::with('latestPost')->take(20)->get();

        // select * from `articles` where `articles`.`category_id` in (1..20) order by `created_at` desc

        return view('categories.single', compact('categories'));

    }

}
