<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;
use App\TemplateType;
use App\Blog;

class BaseController extends Controller
{

    function index($slug=null){

        // para me devolver dados do template
        if( Templates::where('slug',$slug)->where("status","on")->where("template_id",1)->get()->count() > 0){
            $template = Templates::where('slug',$slug)
            ->where("status","on")
            ->where("template_id",1)
            ->get();
            
            return view('front.institucional', compact('template'));
        }else{
            return view("front.error");
        }
    }

}