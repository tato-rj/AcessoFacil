<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::inRandomOrder()->take(6)->get();

        return view('pages.welcome.index', compact('news'));
    }
}
