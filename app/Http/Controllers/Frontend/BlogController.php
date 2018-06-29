<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;
use App\Blog;
use App\BlogImages;
use App\Images;


class BlogController extends Controller
{
    function index(){
        $template = Templates::get()->where("slug","blog");
        $blogs = Blog::get();

        return view('front.blog',compact('template','blogs'));
    }

    function detail($slug){
        $blogs = Blog::where("slug",$slug)->with('Images')->get();

        foreach($blogs as $blog){
            $images = BlogImages::where("blog_id",$blog->images[0]->blog_id)->with('Images')->get();
        }
        
        return view('front.blogDetail', compact('blogs','images'));

    }
}
