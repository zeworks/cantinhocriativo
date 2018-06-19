<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Images;

class AjaxController extends Controller
{
    public function UploadImages(Request $request){
        $images = $request->file();

        foreach($images as $image){
           $path = $image->storeAs('public/images',$image->getClientOriginalName());

            $id = Images::create([
                "image_name" => $image->getClientOriginalName()
            ])->id;

        }

        return $id;
    }
}