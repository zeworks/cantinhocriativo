<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Templates;
use App\TemplatesBlocks;

class InstitutionalController extends Controller
{
    //
    function index(){
        $template = Templates::where("slug","sobre")->with('Blocks')->get();

        if(empty($template[0]->status)){
            return view('front.error');
        }else{
            foreach($template as $key => $tem){
                if(!empty($tem->blocks[0])){
                    $blocks = TemplatesBlocks::where("template_id",$tem->template_id)
                    ->with('Blocks')
                    ->get();
                    return view('front.institucional', compact('blocks','template'));
                }
            }
        }
    }

}
