<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;

class InstitutionalController extends Controller
{
    //
    function index(){
        $template = Templates::get()->where("slug","sobre");

        return view('front.institucional',compact('template'));
    }
}
