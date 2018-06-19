<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class BlocksController extends Controller
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

    public function insertNewBlock(){
        dd("22");
    }
}
