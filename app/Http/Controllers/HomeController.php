<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = post::where('user_id',Auth::user()->id)->get();
        return view('home',['posts'=>$posts]);
    }
}
