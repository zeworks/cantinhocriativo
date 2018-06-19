<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shipping.index');
    }

    public function newShipping(){
        return view('admin.shipping.create');
    }

    public function editShipping(){
        return view('admin.shipping.edit');
    }
}
