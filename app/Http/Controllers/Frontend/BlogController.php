<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function index(){
        // echo "dd"; exit();
        return view('front.blog');
    }
}
