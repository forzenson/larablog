<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class MainPageController extends Controller
{
  public function index() {
    return view('mainpage.index');

  }

}
