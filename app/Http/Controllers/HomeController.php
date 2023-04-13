<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        if ($request->q) {
            $articles = Article::where('title', 'LIKE', '%'.$request->q.'%')->paginate(4);
        } else {
            $articles = Article::paginate(4);
        }



        //$articles = Article::paginate(4);
        return view('home', ['articles' => $articles]);
    }
}