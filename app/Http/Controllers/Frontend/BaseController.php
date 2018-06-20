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
        $template = Templates::get()->where('slug',$slug)
        ->where("status","on");
        foreach($template as $t){
            $templatetype = TemplateType::get()->where("id",$t->template_type);
            foreach($templatetype as $tname){
                $view = $tname->template_name;
            }
        }

        $blogs = Blog::get()->where("status","on");

        if(!empty($view)){
            return view('front.'.$view, compact('templatetype','template','blogs'));
        }else{
            return view('front.error');
        }
    }
}