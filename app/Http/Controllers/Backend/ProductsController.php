<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebsiteSettings;
use App\ProductImages;
use App\Products;
use App\Images;
use Illuminate\Support\Str;

class ProductsController extends Controller
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

    public function index(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        // to include products
        $products = Products::get();

        // returns to the view with the website settings compacted
        return view('admin.products.index', compact('websitesettings','products'));
    }

    public function newProduct(){
        // to include website settings
        $websitesettings = WebsiteSettings::get();
        // returns to the view with the website settings compacted
        return view('admin.products.create', compact('websitesettings'));
    }

    function insertNewProduct(Request $request){

        // if files exists
        if($request->file('upload_photo')){
            $filename = $request->file('upload_photo')->getClientOriginalName();
            $path = $request->file('upload_photo')->storeAs('public/images',$filename);

            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('desc_product'),
                "details" => $request -> input('detail_product'),
                "new_product" => $request -> input('new_product'),
                "reference" => $request -> input('sku'),
                "weight_product" => $request -> input('weight_product'),
                "size_product" => $request -> input('size_product'),
                "colors" => $request -> input('colors_submited'),                
                "featured_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "slug" => Str::slug($request->input('title')),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('desc_product'),
                "details" => $request -> input('detail_product'),
                "new_product" => $request -> input('new_product'),
                "reference" => $request -> input('sku'),
                "weight_product" => $request -> input('weight_product'),
                "size_product" => $request -> input('size_product'),
                "colors" => $request -> input('colors_submited')
            ];
        }

        $productCreated = Products::create($data)->id;
        if( !empty($request -> input('addImagesIDs')) ){
            foreach($request -> input('addImagesIDs') as $images){
                ProductImages::create([
                    "product_id" => $productCreated,
                    "image_id" => $images
                ]);
            }
        }

        return redirect()->back()->with("message","Inserido com sucesso!");
    }

    public function editProduct($id){
        // to include website settings
        $websitesettings = WebsiteSettings::get();

        // to include product data
        $products = Products::find($id);

        // returns to the view with the website settings compacted
        return view('admin.products.edit', compact('websitesettings','products'));
    }

    function updateProduct(Request $request,$id){
        // if files exists
        if($request->file('upload_photo')){
            $filename = $request->file('upload_photo')->getClientOriginalName();
            $path = $request->file('upload_photo')->storeAs('public/images',$filename);
            $data = [
                "title" => $request -> input("title"),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('desc_product'),
                "details" => $request -> input('detail_product'),
                "new_product" => $request -> input('new_product'),
                "reference" => $request -> input('sku'),
                "weight_product" => $request -> input('weight_product'),
                "size_product" => $request -> input('size_product'),
                "colors" => $request -> input('colors_submited'),                
                "featured_image" => $filename
            ];
        }else{
            // if there is not a file
            $data = [
                "title" => $request -> input("title"),
                "status" => $request -> input("status_item"),
                "description" => $request -> input('desc_product'),
                "details" => $request -> input('detail_product'),
                "new_product" => $request -> input('new_product'),
                "reference" => $request -> input('sku'),
                "weight_product" => $request -> input('weight_product'),
                "size_product" => $request -> input('size_product'),
                "colors" => $request -> input('colors_submited')
            ];
        }
        Products::where('id',$id)->update($data);
        return redirect()->back()->with("message","Alterado com sucesso!");
    }

    function deleteProduct($id){
        $products = Products::find($id);
        $products->delete();     
        
        return redirect()->back()->with("message","Removido com sucesso!");
        
    }

}
