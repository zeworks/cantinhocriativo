<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Banners;
use App\Products;

class HomeController extends Controller
{
    
    
    function home(){
        $banners = Banners::get();
        $products = Products::where("status","on")->get();

        return view('front.homepage',compact('banners','products'));
    }
}
