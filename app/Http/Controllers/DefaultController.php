<?php

namespace App\Http\Controllers;

use App\Post;
use App\Banner;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(){
        $posts = Post::where('publication_status', 1)->orderBy('id', 'DESC')->first();
        $banners = Banner::where('publication_status', 1)->orderBy('id', 'DESC')->get();
        return view('front-end.index', ['posts'=>$posts, 'banners'=>$banners]);
    }
}
