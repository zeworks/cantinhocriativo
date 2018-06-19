<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\WebsiteSettings;
use App\Http\Controllers\Controller;
use App\Banners;


class BannersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        $banners = Banners::get();
        
        // returns to the view with the website settings compacted
        return view('admin.banners.index', compact('websitesettings','banners'));
    }

    function newBanner(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        
        return view('admin.banners.create', compact('websitesettings'));
    }

    function insertNewBanner(Request $request){

        if($request->file('upload_banner')){
            $filename = $request->file('upload_banner')->getClientOriginalName();
            $path = $request->file('upload_banner')->storeAs('public/images',$filename);
            $data = [
                "banner_title" => $request -> input('title'),
                "banner_description" => $request -> input('editor_content'),
                "banner_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "banner_title" => $request -> input('title'),
                "banner_description" => $request -> input('editor_content')
            ];
        }
    
        Banners::create($data);

        return redirect()->back()->with("message","Inserido com sucesso!");

    }

    function editBanner($id){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        $banners = Banners::find($id);
        
        return view('admin.banners.edit', compact('websitesettings','banners'));
    }

    function updateBanner(Request $request,$id){

        // if files exists
        if($request->file('upload_banner')){
            $filename = $request->file('upload_banner')->getClientOriginalName();
            $path = $request->file('upload_banner')->storeAs('public/images',$filename);
            $data = [
                "banner_title" => $request -> input('title'),
                "banner_description" => $request -> input('editor_content'),
                "banner_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "banner_title" => $request -> input('title'),
                "banner_description" => $request -> input('editor_content')
            ];
        }

        Banners::where('id',$id)->update($data);
        return redirect()->back()->with("message","Alterado com sucesso!");
    }

    function deleteBanner($id){
        $banners = Banners::find($id);
        $banners->delete();     
        
        return redirect()->back()->with("message","Removido com sucesso!");
        
    }
}
