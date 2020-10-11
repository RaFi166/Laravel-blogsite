<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
   
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $all_posts= Post::latest()->get();
        return view('frontend.homepage', compact('all_posts'));
    }



    //end

}
