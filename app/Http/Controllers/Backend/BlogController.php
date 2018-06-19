<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\WebsiteSettings;
use App\BlogImages;
use App\Blog;
use App\Images;

class BlogController extends Controller
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

        $blogs = Blog::get();
        
        // returns to the view with the website settings compacted
        return view('admin.blog.index', compact('websitesettings','blogs'));
    }

    
    public function newBlog(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.blog.create', compact('websitesettings'));
    }

    function insertNewBlog(Request $request){

        // if files exists
        if($request->file('upload_photo')){
            $filename = $request->file('upload_photo')->getClientOriginalName();
            $path = $request->file('upload_photo')->storeAs('public/images',$filename);
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('editor_content'),
                "featured_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('editor_content')     
            ];
        }

        $blogCreated = Blog::create($data)->id;

        if( !empty($request -> input('addImagesIDs')) ){
            foreach($request -> input('addImagesIDs') as $images){
                BlogImages::create([
                    "blog_id" => $blogCreated,
                    "image_id" => $images
                ]);
            }
        }

        return redirect()->back()->with("message","Inserido com sucesso!");
    }

    public function editBlog($id){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        // to include blog data
        $blogs = Blog::find($id);
        
        // returns to the view with the website settings compacted
        return view('admin.blog.edit', compact('websitesettings','blogs'));
    }

    function updateBlog(Request $request,$id){
        // if files exists
        if($request->file('upload_photo')){
            $filename = $request->file('upload_photo')->getClientOriginalName();
            $path = $request->file('upload_photo')->storeAs('public/images',$filename);
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('editor_content'),
                "featured_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('editor_content'),
            ];
        }

        Blog::where('id',$id)->update($data);
        return redirect()->back()->with("message","Alterado com sucesso!");
    }

    function deleteBlog($id){
        $blogs = Blog::find($id);
        $blogs->delete();     
        
        return redirect()->back()->with("message","Removido com sucesso!");
        
    }
}
