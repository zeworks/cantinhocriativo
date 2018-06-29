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
    
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
     
             //get file extension
            $extension = $image->getClientOriginalExtension();
     
             //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            $image->storeAs('public/images', $filenametostore);
            $image->storeAs('public/images/image_temp', $filenametostore);
     
             //Resize image here
            $thumbnailpath = public_path('storage/images/image_temp/'.$filenametostore);

            $img = Image::make($thumbnailpath)->fit(750, 500, function ($constraint) {
                $constraint->upsize();
            })->save($thumbnailpath);
            
            $id = Images::create([
                "image_name" => $filenametostore
            ])->id;

        }

        return $id;
    }
}