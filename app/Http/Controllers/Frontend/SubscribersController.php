<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscribers;

class SubscribersController extends Controller
{
    
    function index(Request $request){
        // input text
        $input = $request -> input('email_newsletter');
        
        // create funtion
        $creation = $this->SubscribeNewsletter($input);

        // return view
        return view('front.success', compact('input','creation'));

    }

    function SubscribeNewsletter($input){
        $validation = false;
        // array with data
        $data = ["email" => $input];
        $selectEmail = Subscribers::where("email",$input)->get();

        if(count($selectEmail) > 0 ){

            $validation = false;

        }else{

            $validation = true;

            // save to db
            Subscribers::create($data);

        }

        return $validation;

    }

}
