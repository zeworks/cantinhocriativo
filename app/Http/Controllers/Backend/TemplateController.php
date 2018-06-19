<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlocksController;

use App\WebsiteSettings;
use App\Templates;
use App\Blocks;


class TemplateController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        // to include template data
        $templatedata = Templates::get();

        // returns to the view with the website settings compacted
        return view('admin.templates.index', compact('websitesettings','templatedata'));
    }

    public function newTemplate(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.templates.create', compact('websitesettings'));
    }

    function insertNewTemplate(Request $request){

        // if files exists
        if($request->file('upload_photo')){
            $filename = $request->file('upload_photo')->getClientOriginalName();
            $path = $request->file('upload_photo')->storeAs('public/images',$filename);
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "featured_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item")     
            ];
        }

        Templates::create($data);

        return redirect()->back()->with("message","Inserido com sucesso!");
    }

    public function editTemplate($id){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        // to include template data
        $templatedata = Templates::find($id);

        // returns to the view with the website settings compacted
        return view('admin.templates.edit', compact('websitesettings','templatedata'));
    }

    function updateTemplate(Request $request,$id){
        // if files exists
        if($request->file('upload_photo')){
            $filename = $request->file('upload_photo')->getClientOriginalName();
            $path = $request->file('upload_photo')->storeAs('public/images',$filename);
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "featured_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item")     
            ];
        }

        Templates::where('id',$id)->update($data);
        return redirect()->back()->with("message","Alterado com sucesso!");
    }

    function deleteTemplate($id){
        $templatedata = Templates::find($id);
        $templatedata->delete();     
        
        return redirect()->back()->with("message","Removido com sucesso!");
        
    }
}
