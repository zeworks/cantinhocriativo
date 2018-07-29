<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlocksController;

use App\WebsiteSettings;
use App\Templates;
use App\TemplateType;
use App\Blocks;
use App\TemplatesBlocks;


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
        $templatetype = TemplateType::get();
        // returns to the view with the website settings compacted
        return view('admin.templates.create', compact('websitesettings','templatetype'));
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
                "template_id" => $request -> input("template_type"),
                "featured_image" => $filename
            ];

            $templateCreated = Templates::create($data)->id;

            if($request->file('upload_blockImage') != ""){
                foreach($request->file('upload_blockImage') as $key => $image_block_array){
                    $block_image = $request->file('upload_blockImage')[$key]->getClientOriginalName();
                    $block_path = $request->file('upload_blockImage')[$key]->storeAs('public/images/image_temp',$block_image);
    
                    $block = [
                        "title" => $request -> input('title_bloc_page')[$key],
                        "summary" => $request -> input('resum_bloc_item')[$key],
                        "description" => $request -> input('desc_bloc_item')[$key],
                        "image" => $block_image,
                    ];
                    
                    if( !empty($block) ){
                        $blockCreated = Blocks::create($block)->id;
                        TemplatesBlocks::create([
                            "template_id" => $templateCreated,
                            "block_id" => $blockCreated,
                        ]);
                    }
    
                }
            }

        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "template_id" => $request -> input("template_type")
            ];
            if($request -> input('title_bloc_page') != ""){
                $block = [
                    "title" => $request -> input('title_bloc_page'),
                    "summary" => $request -> input('resum_bloc_item'),
                    "description" => $request -> input('desc_bloc_item'),
                ];
            }

            $templateCreated = Templates::create($data)->id;
            
            if( !empty($block) ){
                $blockCreated = Blocks::create($block)->id;
                TemplatesBlocks::create([
                    "template_id" => $templateCreated,
                    "block_id" => $blockCreated,
                ]);
            }

        }

        return redirect()->back()->with("message","Inserido com sucesso!");
    }

    public function editTemplate($id){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        // to include template data
        $templatedata = Templates::find($id);

        $template_blocs = Templates::where('id',$id)->with('Blocks')->get();
 
        $templatetype = TemplateType::get();
        
        foreach($template_blocs as $key => $tem){
            if(!empty($tem->blocks[0])){
                $blocks = TemplatesBlocks::where("template_id",$tem->template_id)->with('Blocks')->get();
            }
        }

        // returns to the view with the website settings compacted
        return view('admin.templates.edit', compact('websitesettings','templatedata','templatetype','blocks'));
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
                "template_id" => $request -> input("template_type"),
                "featured_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "template_id" => $request -> input("template_type")
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