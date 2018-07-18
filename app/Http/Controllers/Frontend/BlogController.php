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
        if(empty($blogs[0]->status)){
            return view('front.error');
        }else{
            foreach($blogs as $blog){
                if(!empty($blog->images[0])){
                    $images = BlogImages::where("blog_id",$blog->images[0]->blog_id)->with('Images')->get();
                }
            }
            return view('front.blogDetail', compact('blogs','images'));
        }
    }
}