<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Images;

use Image;


class AjaxController extends Controller
{
    public function UploadImages(Request $request){
        $images = $request->file();

        foreach($images as $image){
            //get filename with extension
            $filenamewithextension = $image->getClientOriginalName();
    
            $image->storeAs('public/images/image_temp', $filenamewithextension);
     
            $id = Images::create([
                "image_name" => $filenamewithextension
            ])->id;

        }

        return $id;
    }
}