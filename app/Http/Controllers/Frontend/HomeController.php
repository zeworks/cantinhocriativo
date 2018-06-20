<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banners;

class HomeController extends Controller
{
    
    
    function home(){
        $banners = Banners::get();
        return view('front.homepage',compact('banners'));
    }
}
