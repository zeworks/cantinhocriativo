<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;
use App\Products;
use App\ProductImages;
use App\Images;


class ProductController extends Controller
{
    //
    function index(){
        
        $template = Templates::get()->where("slug","produtos");
        $products = Products::get();

        return view('front.product',compact('template','products'));
    }

    function detail($slug){

        $products = Products::where("slug",$slug)->with('Images')->get();

        // all products 
        $allproducts = Products::get();

        foreach($products as $product){
            $images = ProductImages::where("product_id",$product->images[0]->product_id)->with('Images')->get();
        }
        
        return view('front.productDetail', compact('allproducts','products','images'));

    }

}
