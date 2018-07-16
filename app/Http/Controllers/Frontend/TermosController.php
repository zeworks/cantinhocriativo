<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;


class TermosController extends Controller
{
    
    function index(){
        $template = Templates::get()->where("slug","termos");
        return view("front.institucional", compact('template'));
    }
}
