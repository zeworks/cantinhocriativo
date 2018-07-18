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
        $products = Products::where("status","on")->get();

        return view('front.product',compact('template','products'));
    }

    function detail($slug){

        $products = Products::where("slug",$slug)->with('Images')->get();
        
        if(empty($products[0]->status)){
            return view('front.error');
        }else{

            // all products 
            $allproducts = Products::limit(4)->get();
    
            foreach($products as $product){
                if(!empty($product->images[0])){
                    $images = ProductImages::where("product_id",$product->images[0]->product_id)->with('Images')->get();
                }
            }
    
            return view('front.productDetail', compact('allproducts','products','images'));
        }

    }

}
