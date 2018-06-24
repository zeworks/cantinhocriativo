<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;
use App\Blog;


class BlogController extends Controller
{
    function index(){
        $template = Templates::get()->where("slug","blog");
        $blogs = Blog::get();

        return view('front.blog',compact('template','blogs'));
    }

    function detail($slug){
        return view('front.blogDetail');
    }
}
